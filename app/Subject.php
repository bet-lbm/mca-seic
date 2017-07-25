<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //tablas 
    protected $table='subjects';
    protected $fillable=['name_subject','hours','max_students'];
}
