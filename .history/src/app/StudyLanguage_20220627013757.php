<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyLanguage extends Model
{
    public function big_question()
    {
        return $this->belongsTo('App\BigQuestion');
    }
}
