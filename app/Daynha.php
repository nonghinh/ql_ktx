<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daynha extends Model
{
    //
    protected $table = 'daynha';
    protected $fillable = ['tennha', 'mota'];
    public $timestamps = false;
}
