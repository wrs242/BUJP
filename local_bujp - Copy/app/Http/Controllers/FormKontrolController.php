<?php

namespace App\Http\Controllers;

use App\Models\kontrol_bulanan;
use App\Models\bujp;
use Illuminate\Http\Request;

class FormKontrolController extends Controller
{
    public function index()
    {
        $kontrol = kontrol_bulanan::all();
        return view('data-Form-Kontrol',compact('kontrol'));
    }

    public function entry()
    {
        $bujp = bujp::all();
        $filter_bujp = $bujp->where('STATUS','Kerjasama');
        return view('entry-Form-Kontrol', compact('filter_bujp'));
    }

    public function store(Request $request)
    {
        $kontrol = new kontrol_bulanan;
        $kontrol->ID_BUJP = $request->input('NAMA_BUJP');
        $kontrol->PERIODE_KONTROL = $request->input('PERIODE_KONTROL');
        $kontrol->SDM_KEHADIRAN_STANDAR = $request->input('SDM_KEHADIRAN_STANDAR');
        $kontrol->SDM_KEHADIRAN_REALISASI = $request->input('SDM_KEHADIRAN_REALISASI');
        $kontrol->SDM_KEHADIRAN_TINDAKAN = $request->input('SDM_KEHADIRAN_TINDAKAN');
        $kontrol->SDM_PERGANTIAN_ANGGOTA_STANDAR = $request->input('SDM_PERGANTIAN_ANGGOTA_STANDAR');
        $kontrol->SDM_PERGANTIAN_ANGGOTA_REALISASI = $request->input('SDM_PERGANTIAN_ANGGOTA_REALISASI');
        $kontrol->SDM_PERGANTIAN_ANGGOTA_TINDAKAN = $request->input('SDM_PERGANTIAN_ANGGOTA_TINDAKAN');
        $kontrol->ADMINISTRASI_INVOICE_STANDAR = $request->input('ADMINISTRASI_INVOICE_STANDAR');
        $kontrol->ADMINISTRASI_INVOICE_REALISASI = $request->input('ADMINISTRASI_INVOICE_REALISASI');
        $kontrol->ADMINISTRASI_INVOICE_TINDAKAN = $request->input('ADMINISTRASI_INVOICE_TINDAKAN');
        $kontrol->ADMINISTRASI_GIRO_STANDAR = $request->input('ADMINISTRASI_GIRO_STANDAR');
        $kontrol->ADMINISTRASI_GIRO_REALISASI = $request->input('ADMINISTRASI_GIRO_REALISASI');
        $kontrol->ADMINISTRASI_GIRO_TINDAKAN = $request->input('ADMINISTRASI_GIRO_TINDAKAN');
        $kontrol->GAJI_TAKE_HOME_PAY_STANDAR = $request->input('GAJI_TAKE_HOME_PAY_STANDAR');
        $kontrol->GAJI_TAKE_HOME_PAY_REALISASI = $request->input('GAJI_TAKE_HOME_PAY_REALISASI');
        $kontrol->GAJI_TAKE_HOME_PAY_TINDAKAN = $request->input('GAJI_TAKE_HOME_PAY_TINDAKAN');
        $kontrol->GAJI_REALISASI_STANDAR = $request->input('GAJI_REALISASI_STANDAR');
        $kontrol->GAJI_REALISASI_REALISASI = $request->input('GAJI_REALISASI_REALISASI');
        $kontrol->GAJI_REALISASI_TINDAKAN = $request->input('GAJI_REALISASI_TINDAKAN');
        $kontrol->KEJADIAN = $request->input('KEJADIAN');

        $kontrol ->save();

        return redirect()->intended('/form-kontrol');
    }
}
