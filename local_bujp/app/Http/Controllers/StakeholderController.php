<?php

namespace App\Http\Controllers;

use App\Models\Stakeholder;
use Illuminate\Http\Request;

class StakeholderController extends Controller
{
    public function index()
    {
        $stakeholders = stakeholder::all();
        return view('data-stakeholder',compact('stakeholders'));
    }
    public function entry()
    {
        return view('entry-stakeholder');
    }

    public function store(Request $request)
    {
       $stakeholder = new Stakeholder;
       $stakeholder->KAWASAN = $request->input('KAWASAN');
       $stakeholder->WILAYAH = $request->input('WILAYAH');
       $stakeholder->INSTANSI = $request->input('INSTANSI');
       $stakeholder->WILAYAH_HUKUM = $request->input('WILAYAH_HUKUM');
       $stakeholder->ALAMAT_INSTANSI = $request->input('ALAMAT_INSTANSI');
       $stakeholder->NAMA_P_LAMA = $request->input('NAMA_P_LAMA');
       $stakeholder->PANGKAT_P_LAMA = $request->input('PANGKAT_P_LAMA');
       $stakeholder->MULAI_MENJABAT_P_LAMA = $request->input('MULAI_MENJABAT_P_LAMA');
       $stakeholder->AKHIR_MENJABAT_P_LAMA = $request->input('AKHIR_MENJABAT_P_LAMA');
       $stakeholder->JUMLAH_PERSONEL_P_LAMA = $request->input('JUMLAH_PERSONEL_P_LAMA');
       $stakeholder->LOKASI_TUGAS_BARU_P_LAMA = $request->input('LOKASI_TUGAS_BARU_P_LAMA');
       $stakeholder->TAHUN_ANGKATAN_P_LAMA = $request->input('TAHUN_ANGKATAN_P_LAMA');
       $stakeholder->TELP_P_LAMA = $request->input('TELP_P_LAMA');
       $stakeholder->NAMA_P_BARU = $request->input('NAMA_P_BARU');
       $stakeholder->PANGKAT_P_BARU = $request->input('PANGKAT_P_BARU');
       $stakeholder->MULAI_MENJABAT_P_BARU = $request->input('MULAI_MENJABAT_P_BARU');
       $stakeholder->AKHIR_MENJABAT_P_BARU = $request->input('AKHIR_MENJABAT_P_BARU');
       $stakeholder->JUMLAH_PERSONEL_P_BARU = $request->input('JUMLAH_PERSONEL_P_BARU');
       $stakeholder->LOKASI_TUGAS_LAMA_P_BARU = $request->input('LOKASI_TUGAS_LAMA_P_BARU');
       $stakeholder->TAHUN_ANGKATAN_P_BARU = $request->input('TAHUN_ANGKATAN_P_BARU');
       $stakeholder->TELP_P_BARU = $request->input('TELP_P_BARU');
       if($request->hasFile('FOTO_P_LAMA'))
       {
        $file = $request->file('FOTO_P_LAMA');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('uploads/stakeholder/',$filename);
        $stakeholder->FOTO_P_LAMA = $filename;
       }
       if($request->hasFile('FOTO_P_BARU'))
       {
        $file = $request->file('FOTO_P_BARU');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('uploads/stakeholder/',$filename);
        $stakeholder->FOTO_P_BARU = $filename;
       }
       $stakeholder->save();


       return redirect()->intended('/stakeholder');

    }
}
