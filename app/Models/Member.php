<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public function getNameAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->name_ar;
    	}
    	return $this->name_en;
    }
    public function getDegreeAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->degree_ar;
    	}
    	return $this->degree_en;
    }
}
