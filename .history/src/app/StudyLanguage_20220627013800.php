<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyLanguage extends Model
{
    public function ()
    {
        return $this->belongsTo('App\BigQuestion');
    }
}
