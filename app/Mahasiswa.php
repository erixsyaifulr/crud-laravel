<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use SoftDeletes;
    protected $table='mahasiswa'; //inisialisasi tabel

    protected $fillable = ['nama','nim','email','jurusan'];
}
