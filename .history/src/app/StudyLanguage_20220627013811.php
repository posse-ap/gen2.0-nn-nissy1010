<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyLanguage extends Model
{
    public function study_data()
    {
        return $this->belongsTo('App\BigQuestion');
    }
}
