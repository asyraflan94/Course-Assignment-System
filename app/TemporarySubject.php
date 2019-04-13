<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemporarySubject extends Model
{
    protected $fillable = ['subject_name','subject_code','subject_long_name','subject_type'];
    public $timestamps = false;
}
