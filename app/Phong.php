<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    //
    protected $table = 'phong';
    protected $fillable = ['tenp', 'manha'];
    public $timestamps = false;
}
