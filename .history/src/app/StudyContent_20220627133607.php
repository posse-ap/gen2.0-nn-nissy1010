<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyContent extends Model
{
    public function records()
    {
        return $this->has('App\StudyRecord');
    }
}
