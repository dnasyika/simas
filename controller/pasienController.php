<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Pasien;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Html\Builder;
use Illuminate\Support\Facades\DB;


class pasienController extends Controller
{
//    function index()
//    {
//        $pasien = Pasien::all();
//        return view('viewDaftarPasien', compact('pasien'));
//
//    }

    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $pasien = Pasien::select(['ID_pasien', 'Nama', 'Alamat']);
            return Datatables::of($pasien)->make(true);
//                ->addColumn('action', function ($pasien) {
//                    return view('datatable._action', [
//                        'edit_url' => route('am.edit', $pasien->ID_pasien),
//                    ]);
//                })->make(true);
        }
        $html = $htmlBuilder
            ->addColumn(['data' => 'ID_pasien', 'name' => 'ID_pasien', 'title' => 'ID Pasien'])
            ->addColumn(['data' => 'Nama', 'name' => 'Nama', 'title' => 'Nama Pasien'])
            ->addColumn(['data' => 'Alamat', 'name' => 'Alamat', 'title' => 'Alamat']);
//                ->addColumn(['data' => 'action', 'name' => 'action', 'title' => 'Action', 'orderable' => false, 'searchable' => false]);
        return view('viewDaftarPasien', compact('html'));
    }


    function labindex()
    {
        $pasien = DB::table('daftar_pasien')
            ->join('daftar_kunjungan', 'daftar_pasien.ID_Pasien', '=', 'daftar_kunjungan.ID_Pasien')
            ->where('daftar_kunjungan.Jenis_Perawatan', '=', 'Laboratorium')->get();
        return view('viewDaftarPasienLab', compact('pasien'));
    }


}
