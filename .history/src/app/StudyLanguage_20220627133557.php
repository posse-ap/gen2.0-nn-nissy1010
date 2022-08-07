<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyLanguage extends Model
{
    public function records()
    {
        return $this->has('App\StudyRecord');
    }
}
