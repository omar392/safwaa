<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    public function getSliderAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->short_title;
    	}
    	return $this->long_title;
    }
}
