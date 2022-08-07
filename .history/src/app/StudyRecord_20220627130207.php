<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyRecord extends Model
{
    public function languages()
    {
        return $this->hasMany('App\StudyLanguage');
    }
    public function content()
    {
        return $this->hasMany('App\StudyContent');
    }
    public function scopeDay($query, $day)
    {
        return $query->where('study_records', $day);
    }

}
