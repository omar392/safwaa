<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Awareness extends Model
{
    use HasFactory;
    public function getTitleAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->new_title_ar;
    	}
    	return $this->new_title_en;
    }
    public function getDescriptionAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->new_description_ar;
    	}
    	return $this->new_description_en;
    }
}
