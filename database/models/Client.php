<?php
/**
 * Created by PhpStorm.
 * User: Just1ce
 * Date: 03.12.17
 * Time: 16:32
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {
    protected $table = 'clients';
    protected $casts = [
        'id'       => 'integer',
        'isProxy'  => 'boolean',
        'offer_id' => 'integer'
    ];

    public function landing() {
        return $this->hasOne('App\Offer');
    }
}