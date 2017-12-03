<?php
/**
 * Created by PhpStorm.
 * User: Just1ce
 * Date: 03.12.17
 * Time: 17:25
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landing extends Model {
    protected $table = 'landings';
    protected $casts = [
        'id' => 'integer'
    ];
}