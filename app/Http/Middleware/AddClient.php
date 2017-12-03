<?php namespace App\Http\Middleware;

use Closure;
use Cookie;

class AddClient {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
	    $offer = \App\Offer::whereThread($request->route('id'))->first();

	    if (! $offer ) {
            return $next($request);
        }

        //Проверяем заходил ли он уже на этот лэндинг
        $cookieClientId = $request->cookie('client');

	    if (! $cookieClientId) {
            $this->addNewClient($request, $offer->id);
            return $next($request);
        }


        $client = \App\Client::whereId($cookieClientId)
            ->whereOfferId($offer->id)
            ->first();

        if (! $client) {
            $this->addNewClient($request, $offer->id);
            return $next($request);
        }

        $client->touch();

		return $next($request);
	}

	private function addNewClient($request, $offerId) {
        $newClient = new \App\Client;
        $newClient->is_proxy = $this->isProxy($request);
        $newClient->ip = $this->getRealIp($request);
        $newClient->data = json_encode($this->getHeadersInfo($request));
        $newClient->offer_id = $offerId;
        $newClient->save();
        Cookie::queue('client', $newClient->id, 60);
    }

	private $unUseHeaders = [
	    'REQUEST_TIME' => true,
        'REQUEST_TIME_FLOAT' => true,
        'PHP_SELF' => true,
        'SCRIPT_NAME' => true,
        'SERVER_PROTOCOL' => true,
        'SCRIPT_FILENAME' => true,
        'SERVER_ADMIN' => true,
        'CONTEXT_DOCUMENT_ROOT' => true,
        'DOCUMENT_ROOT' => true,
        'SERVER_NAME' => true,
        'SERVER_ADDR' => true,
        'SERVER_SOFTWARE' => true,
        'HTTP_COOKIE' => true,
        'PATH' => true,
    ];

	private function getHeadersInfo($request) {
	    $server = $request->server();
        $headers = [];
	    foreach ($server as $key => $val) {
	        if (isset($this->unUseHeaders[$key])) {
                continue;
            }

            $headers[$key] = $val;
        }

        return $headers;
    }

	private function getRealIp($request) {
        if ($request->server('HTTP_X_REAL_IP')) {
            $called_ip = $request->server('HTTP_X_REAL_IP');
        } elseif ($request->server('HTTP_X_FORWARDED_FOR')) {
            $called_ip = $request->server('HTTP_X_FORWARDED_FOR');
        } else {
            $called_ip = $request->server('REMOTE_ADDR');
        }

        return $called_ip;
    }

    private function isProxy($request) {
        $proxy_headers = array(
            'HTTP_VIA',
            'HTTP_X_FORWARDED_FOR',
            'HTTP_FORWARDED_FOR',
            'HTTP_X_FORWARDED',
            'HTTP_FORWARDED',
            'HTTP_CLIENT_IP',
            'HTTP_FORWARDED_FOR_IP',
            'VIA',
            'X_FORWARDED_FOR',
            'FORWARDED_FOR',
            'X_FORWARDED',
            'FORWARDED',
            'CLIENT_IP',
            'FORWARDED_FOR_IP',
            'HTTP_PROXY_CONNECTION'
        );

        foreach($proxy_headers as $x){
            if ($request->server($x)){
                return true;
            }
        }
        return false;
    }

}
