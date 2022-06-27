<?php

namespace App\Http\Controllers;

use App\Models\penilaian_tahunan;
use App\Models\bujp;
use Illuminate\Http\Request;

class PenilaianTahunanController extends Controller
{
    public function index()
    {
        $penilaian = penilaian_tahunan::all();
        return view('data-penilaian-tahunan',compact('penilaian'));
    }
    public function entry()
    {
        $bujp = bujp::all();
        $filter_bujp = $bujp->where('STATUS','Kerjasama');
        return view('entry-penilaian-tahunan', compact('filter_bujp'));
    }
    public function store(Request $request)
    {
        $penilaian = new penilaian_tahunan();
        $penilaian->ID_BUJP = $request->input('ID_BUJP');
        $penilaian->NILAI_SCHEDULE = $request->input('NILAI_SCHEDULE');
        $penilaian->KETERANGAN_SCHEDULE = $request->input('KETERANGAN_SCHEDULE');
        $penilaian->NILAI_KINERJA = $request->input('NILAI_KINERJA');
        $penilaian->KETERANGAN_KINERJA = $request->input('KETERANGAN_KINERJA');
        $penilaian->NILAI_TARGET_PENGAMANAN = $request->input('NILAI_TARGET_PENGAMANAN');
        $penilaian->KETERANGAN_TARGET_PENGAMANAN = $request->input('KETERANGAN_TARGET_PENGAMANAN');
        $penilaian->NILAI_PELANGGARAN = $request->input('NILAI_PELANGGARAN');
        $penilaian->KETERANGAN_PELANGGARAN = $request->input('KETERANGAN_PELANGGARAN');
        $penilaian->NILAI_SDM = $request->input('NILAI_SDM');
        $penilaian->KETERANGAN_SDM = $request->input('KETERANGAN_SDM');
        $penilaian->NILAI_KEHADIRAN = $request->input('NILAI_KEHADIRAN');
        $penilaian->KETERANGAN_KEHADIRAN = $request->input('KETERANGAN_KEHADIRAN');
        $penilaian->NILAI_ALAT_ALAT_KERJA = $request->input('NILAI_ALAT_ALAT_KERJA');
        $penilaian->KETERANGAN_ALAT_ALAT_KERJA = $request->input('KETERANGAN_ALAT_ALAT_KERJA');
        $penilaian->NILAI_KETEPATAN_LAPORAN = $request->input('NILAI_KETEPATAN_LAPORAN');
        $penilaian->KETERANGAN_KETEPATAN_LAPORAN = $request->input('KETERANGAN_KETEPATAN_LAPORAN');
        $penilaian->NILAI_KOMPLAIN = $request->input('NILAI_KOMPLAIN');
        $penilaian->KETERANGAN_KOMPLAIN = $request->input('KETERANGAN_KOMPLAIN');
        $penilaian->NILAI_ADMINISTRASI = $request->input('NILAI_ADMINISTRASI');
        $penilaian->KETERANGAN_ADMINISTRASI = $request->input('KETERANGAN_ADMINISTRASI');
        $TOTAL = $request->input('N_X_B_SCHEDULE') + 
        $request->input('N_X_B_KINERJA') + 
        $request->input('N_X_B_TARGET_PENGAMANAN') + 
        $request->input('N_X_B_PELANGGARAN') + 
        $request->input('N_X_B_SDM') + 
        $request->input('N_X_B_KEHADIRAN') + 
        $request->input('N_X_B_ALAT_ALAT_KERJA') +
        $request->input('N_X_B_KETEPATAN_LAPORAN') +
        $request->input('N_X_B_KOMPLAIN') +
        $request->input('N_X_B_ADMINISTRASI');
        $penilaian->TOTAL_NILAI =  $TOTAL;

        $penilaian->save();

        return redirect()->intended('/penilaian-tahunan');


    }
}
