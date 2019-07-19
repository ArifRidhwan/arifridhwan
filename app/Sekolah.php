<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $fillable =[
    'siswa','nis','jurusan','guru','nip'
    ];
    public $timestamps=true;
}
