<?php
/**
 * Created by PhpStorm.
 * User: Just1ce
 * Date: 03.12.17
 * Time: 18:50
 */

namespace App\Http\Controllers;


class OfferController extends Controller {



    public function index($id) {
        $offer = \App\Offer::with('landing')
            ->whereThread($id)
            ->first();

        if (! $offer) {
            return response('404 Not Found', 404)
                ->header('Content-Type', 'text/plain');
        }

        return view('landings.' . $offer->landing->name);
    }

    public function order($id) {

    }
}