<?php

namespace App\Http\Controllers;

use App\cekLab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cekLabController extends Controller
{
    function index()
    {
        $cekLab = DB::table('daftar_kunjungan_lab')
            ->join('daftar_pasien', 'daftar_kunjungan_lab.ID_Pasien', '=', 'daftar_pasien.ID_Pasien')
            ->join('daftar_pegawai', 'daftar_kunjungan_lab.ID_Pegawai', '=', 'daftar_pegawai.ID')
            ->join('test_lab', 'daftar_kunjungan_lab.id_test', '=', 'test_lab.id_test')
            ->join('jenis_test_lab', 'test_lab.id_jenis', '=', 'jenis_test_lab.id_jenis')
            ->select('ID_Kunjungan',
                'daftar_pasien.Nama as namaPasien',
                'daftar_pegawai.Nama as namaPegawai',
                'jenis_test_lab.nama_jenis as namaJenis',
                'test_lab.nama_test as namaTest',
                'Hasil_Pemeriksaan',
                'test_lab.nilai_normal as nilaiNormal')
            ->get();
        return view('viewDaftarCekLab', compact('cekLab'));
    }

    function show($id)
    {
        $pasien = DB::table('daftar_pasien')->where('ID_pasien', '=', $id)->first();
        $pegawai = DB::table('daftar_pegawai')->select('ID', 'Nama as namaPegawai')->get();
//        $jenisCek = DB::table('jenis_test_lab')->select('jenis_test_lab.id_jenis','nama_jenis','nama_test','nilai_normal')
//            ->join('test_lab','jenis_test_lab.id_jenis','=', 'test_lab.id_jenis')
//            ->get();
        $jenisCek = DB::table('jenis_test_lab')->get();
        return view('viewTambahCekLab', compact('pasien', 'pegawai', 'jenisCek'));
    }

    function tambahKunjungan(Request $requests)
    {
        $rules = array(
            'idKunjungan' => 'required|max:20',
            'idPasien' => 'required|max:20',
            'idPegawai' => 'required|max:20',
            'hasilPemeriksaan' => 'required'
        );

        $this->validate($requests, $rules);

        cekLab::create([
            'ID_Kunjungan' => $requests->idKunjungan,
            'ID_Pasien' => $requests->idPasien,
            'ID_Pegawai' => $requests->idPegawai,
            'Hasil_Pemeriksaan' => $requests->hasilPemeriksaan,
            'id_test' => $requests->idTest
        ]);
        \Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menambahkan Kunjungan"
        ]);
        return redirect('lab/daftarCekLab');
    }

    function getTestLab($id)
    {
        $testLab = DB::table('test_lab')->where('id_jenis', '=', $id)->get();
        die(json_encode($testLab));
    }

}
