<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cekLab extends Model
{
    protected $table = 'daftar_kunjungan_lab';

    protected $fillable = ['ID_Kunjungan', 'ID_Pasien', 'ID_Pegawai', 'Hasil_Pemeriksaan', 'id_test'];

    public $timestamps = false;
}
