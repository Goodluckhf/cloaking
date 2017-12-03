<?php
/**
 * Created by PhpStorm.
 * User: Just1ce
 * Date: 03.12.17
 * Time: 17:37
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model {
    protected $table = 'offers';
    protected $casts = [
        'id' => 'integer',
        'landing_id' => 'integer',
    ];

    public function landing() {
        return $this->belongsTo('App\Landing');
    }
}