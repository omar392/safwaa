<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public function getTitleAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->title_ar;
    	}
    	return $this->title_en;
    }
    public function getSubjectAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->subject_ar;
    	}
    	return $this->subject_en;
    }
}
