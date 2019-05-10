<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'daftar_pasien';

    protected $fillable = ['ID_pasien', 'Nama', 'Alamat'];

    public $timestamps = false;

}
