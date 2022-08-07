<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyContent extends Model
{
    public function study_records()
    {
        return $this->belongsTo('App\StudyRecord');
    }
}
