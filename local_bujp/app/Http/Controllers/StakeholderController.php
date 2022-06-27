<?php

namespace App\Http\Controllers;

use App\Models\Stakeholder;
use App\Models\User;
use Illuminate\Http\Request;

class StakeholderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
       $stakeholder->USER_CREATED = auth()->user()->id;
       $stakeholder->DATE_CREATED = today();
       if($request->hasFile('FOTO_P_LAMA'))
       {
        $file = $request->file('FOTO_P_LAMA');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('uploads/stakeholder/pejabat_lama',$filename);
        $stakeholder->FOTO_P_LAMA = $filename;
       }
       if($request->hasFile('FOTO_P_BARU'))
       {
        $file = $request->file('FOTO_P_BARU');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('uploads/stakeholder/pejabat_baru',$filename);
        $stakeholder->FOTO_P_BARU = $filename;
       }
       $stakeholder->save();


       return redirect()->intended('/stakeholder');

    }

    public function detail(Request $request)
    {
        $id_stakeholder = $request->id;
        $stakeholder = Stakeholder::where('ID_STAKEHOLDER',$id_stakeholder)->first();
        return view('/detail-stakeholder',compact('stakeholder'));
    }
    public function edit(Request $request)
    {
        $id_stakeholder = $request->id;
        $stakeholder = Stakeholder::where('ID_STAKEHOLDER',$id_stakeholder)->first();
        return view('/edit-stakeholder',compact('stakeholder'));
    }
    public function store_edit(Request $request)
    {   
        /*$validated =  $request->validate([

            'ID_STAKEHOLDER'=>'required',
            'KAWASAN'=>'required',
            'WILAYAH'=>'required',
            'INTANSI' =>'required',
            'WILAYAH_HUKUM' =>'required',
            'ALAMAT_INSTANSI' =>'required',
            'NAMA_P_LAMA' =>'nullable',
            'PANGKAT_P_LAMA' =>'nullable',
            'MULAI_MENJABAT_P_LAMA' =>'nullable',
            'AKHIR_MENJABAT_P_LAMA' =>'nullable',
            'JUMLAH_PERSONEL_P_LAMA' =>'nullable',
            'LOKASI_TUGAS_BARU_P_LAMA' =>'nullable',
            'TAHUN_ANGKATAN_P_LAMA' =>'nullable',
            'TELP_P_LAMA' =>'nullable',
            'NAMA_P_BARU' =>'required',
            'PANGKAT_P_BARU' =>'required',
            'MULAI_MENJABAT_P_BARU' =>'required',
            'AKHIR_MENJABAT_P_BARU' =>'required',
            'JUMLAH_PERSONEL_P_BARU' =>'required',
            'LOKASI_TUGAS_LAMA_P_BARU' =>'nullable',
            'TAHUN_ANGKATAN_P_BARU' =>'required',
            'TELP_P_BARU' =>'required',
            'FOTO_P_LAMA' => ['nullable','mimes:jpg,png,jpeg'],
            'FOTO_P_BARU' => ['required','mimes:jpg,png,jpeg']
        ]);
        */
        $id_stakeholder = $request->input('ID_STAKEHOLDER');
        $stakeholder = Stakeholder::find($id_stakeholder);
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
        $stakeholder->USER_UPDATED = auth()->user()->id;
        $stakeholder->DATE_UPDATED = today();
        if($request->hasFile('FOTO_P_LAMA'))
       {
        $file = $request->file('FOTO_P_LAMA');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('uploads/stakeholder/pejabat_lama',$filename);
        $stakeholder->FOTO_P_LAMA = $filename;
       }
       if($request->hasFile('FOTO_P_BARU'))
       {
        $file = $request->file('FOTO_P_BARU');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('uploads/stakeholder/pejabat_baru',$filename);
        $stakeholder->FOTO_P_BARU = $filename;
       }
       
       $stakeholder->update();
       return redirect()->intended($id_stakeholder.'/detail-stakeholder');
    }

    public function destroy($id)
    {
        Stakeholder::destroy($id);
        return redirect('/stakeholder');
    }
}
