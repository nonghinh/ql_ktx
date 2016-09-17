<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    //
    protected $table = 'sinhvien';
    protected $fillable = ['masv', 'tensv', 'nha', 'phong'];
    public $timestamps = false;
}
