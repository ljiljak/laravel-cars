<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public static function getTitle() {
    	return self::where('title')->get();
    }
}
