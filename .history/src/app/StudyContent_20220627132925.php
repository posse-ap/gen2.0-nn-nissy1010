<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyContent extends Model
{
    public function study_data()
    {
        return $this->belongsTo('App\StudyRecord');
    }
}
