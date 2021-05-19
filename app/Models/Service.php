<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public function getNameAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->name_ar;
    	}
    	return $this->name_en;
    }
    public function getDescriptionAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->description_ar;
    	}
    	return $this->description_en;
    }
}
