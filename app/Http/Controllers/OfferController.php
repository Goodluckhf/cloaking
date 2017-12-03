<?php
/**
 * Created by PhpStorm.
 * User: Just1ce
 * Date: 03.12.17
 * Time: 18:50
 */

namespace App\Http\Controllers;


use Request;

class OfferController extends Controller {

    public function index($id) {
        $offer = \App\Offer::with('landing')
            ->whereThread($id)
            ->first();

        if (! $offer) {
            return response('404 Not Found', 404)
                ->header('Content-Type', 'text/plain');
        }

        return view('landings.' . $offer->landing->name, [
            'thread'     => $id,
            'publicPath' => '/landing/' . $offer->landing->name,
            'host'       => Request::server('HTTP_HOST'),
        ]);
    }

    public function order($id) {
        $offer = \App\Offer::with('landing')
            ->whereThread($id)
            ->first();

        if (! $offer) {
            return response('404 Not Found', 404)
                ->header('Content-Type', 'text/plain');
        }

        if (isset($_SERVER['HTTP_X_REAL_IP'])) {
            $called_ip = $_SERVER['HTTP_X_REAL_IP'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $called_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $called_ip = $_SERVER['REMOTE_ADDR'];
        }

        include(base_path() . '/SxGeo.php');
        $SxGeo = new \SxGeo(base_path() . '/SxGeo.dat');
        $countryKey = $SxGeo->get($called_ip);
        $orderData = [
            'country'           =>  $countryKey, //страна доставки
            'fio'               =>  Request::get('name'), // Имя
            'phone'             =>  Request::get('phone'), // Телефон
            'user_ip'           =>  $called_ip, //ip пользователя
            'user_agent'        =>  Request::server('HTTP_USER_AGENT'), //UserAgent пользователя
            'order_time'        =>  time(), //timestamp времени заказа
        ];
        $infocdnData = [
            'orders' => [
                $orderData
            ],
            'system'    =>  [
                'network'   => 'ad1', // название сети
                'thread'    => $id, // id потока из ad1.ru, например bakm
                'subid'     => '', // 5 субайди, например subid1:subid2:subid3:subid4:subid5 (не обязательно)
                'site_key'  => '' // ключ
            ]
        ];

        $clientId = Request::cookie('client');

        if ($clientId) {
            $client = \App\Client::find($clientId);

            $client->order_data = json_encode($orderData);
            $client->save();
        }

        $infocdnJson = json_encode($infocdnData);
        //dd($infocdnJson);
        /*$handle = curl_init('http://infocdn.org/interface/api.php');
        curl_setopt($handle, CURLOPT_POSTFIELDS, urlencode($infocdnJson));
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($handle);
        curl_close($handle);*/


        return redirect('/landing/' . $offer->landing->name . '/success.html');
    }
}