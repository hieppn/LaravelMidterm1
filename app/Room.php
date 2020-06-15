<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
	function getDisplayPrice(){
        $fomattedPrice= number_format($this->price,0,',','.');
        return   $fomattedPrice . " VND";
    }
    function getDisplayArea(){
        $fomattedArea= number_format($this->area);
        return   $fomattedArea . " m^2";
    }
}
