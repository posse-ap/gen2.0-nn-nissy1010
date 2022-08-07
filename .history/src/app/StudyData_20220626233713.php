<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyData extends Model
{
    protected $table = 'study_data';

    public function languages()
    {
        return $this->hasMany('App\StudyLanguage');
    }

    public function content()
    {
        return $this->hasMany('App\StudyContent');
    }

    public function scopeDay($query, $big_question_id)
    {
        return $query->where('big_question_id', $big_question_id);
    }
}
