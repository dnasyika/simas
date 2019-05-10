<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rujukan extends Model
{
    protected $table = 'daftar_rujukan';

    protected $fillable = ['ID_Rujukan', 'RS_Tujuan', 'Status_Persetujuan', 'ID_Pasien', 'ID_Pemriksaan', 'ID_Pegawai', 'Perihal'];

    public $timestamps = false;

    public function pasien()
    {
        $this->belongsTo(Pasien::class, 'ID_Pasien');
    }
}
