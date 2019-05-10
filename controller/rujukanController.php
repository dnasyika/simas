<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rujukan;
use Illuminate\Support\Facades\DB;

class rujukanController extends Controller
{
    function index()
    {
        $rujukan = Rujukan::join('daftar_pasien', 'daftar_rujukan.ID_Pasien', '=', 'daftar_pasien.ID_Pasien')->get();
        return view('validasiRujukan', compact('rujukan'));
    }

    function validasi(Request $request, $id)
    {
        Rujukan::where('ID_Rujukan', $id)->update([
            'Status_Persetujuan' => 1,
            'ID_Rujukan' => $request->id
        ]);
        \Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Rujukan dengan id $request->id Berhasil divalidasi"
        ]);
        return redirect('dokter/rujukan');
    }

    function tolak(Request $request, $id)
    {
        Rujukan::where('ID_Rujukan', $id)->update([
            'Status_Persetujuan' => 2
        ]);
        \Session::flash("flash_notification", [
            "level" => "error",
            "message" => "Rujukan dengan id $request->id Telah ditolak"
        ]);
        return redirect('dokter/rujukan');
    }
    function detail ($id){
        $list = DB::table('daftar_pemeriksaan')->select('ID_Pemeriksaan', 'ID_Pasien', 'ID_Perawat', 'Anamnesa', 'Diagnosa', 'Tindakan', 'Tanggal_Kunjungan')
        ->where('ID_Pemeriksaan','=',$id)->get();
        return view('detailPemeriksaan', compact('list'));
    }
}
