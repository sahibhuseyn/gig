<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public static function projects(){

        return Project::all();
    }
}
