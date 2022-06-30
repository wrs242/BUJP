<?php

namespace App\Http\Controllers;

use App\Models\bujp;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class RekrutmenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $rekrutmen = bujp::all();
        return view('data-rekrutmen',compact('rekrutmen'));
    }
    public function entry()
    {
        return view('entry-rekrutmen');
    }

    public function store(Request $request)
    {
        $rekrutmen = new bujp;
        $rekrutmen->NAMA_BUJP = $request->input('NAMA_BUJP');
        $rekrutmen->TELP_KANTOR = $request->input('TELP_KANTOR');
        $rekrutmen->TGL_TERIMA_COMPANY_PROFILE = $request->input('TGL_TERIMA_COMPANY_PROFILE');
        $rekrutmen->ALAMAT = $request->input('ALAMAT');
        $rekrutmen->UNDANGAN_PRESENTASI = $request->input('UNDANGAN_PRESENTASI');
        $rekrutmen->TGL_PRESENTASI = $request->input('TGL_PRESENTASI');
        $rekrutmen->ALASAN_TIDAK_DIUNDANG = $request-> input('ALASAN_TIDAK_DIUNDANG');
        $rekrutmen->KEPEMILIKAN_KANTOR = $request->input('KEPEMILIKAN_KANTOR');
        $rekrutmen->PERIODE_SEWA= $request->input('PERIODE_SEWA');
        $rekrutmen->AKTA_PENDIRIAN_PERUSAHAAN = $request->input('AKTA_PENDIRIAN_PERUSAHAAN');
        $rekrutmen->TGL_PENDIRIAN = $request->input('TGL_PENDIRIAN');
        $rekrutmen->AKTA_PERUBAHAN = $request->input('AKTA_PERUBAHAN');
        $rekrutmen->NO_NOTARIS = $request->input('NO_NOTARIS');
        $rekrutmen->NO_SIO =  $request->input('NO_SIO');
        $rekrutmen->MASA_BERLAKU_SIO = $request->input('MASA_BERLAKU_SIO');
        $rekrutmen->STATUS_BPJS_KETENAGA_KERJAAN = $request->input('STATUS_BPJS_KETENAGA_KERJAAN');
        $rekrutmen->NO_BPJS_KETENAGA_KERJAAN = $request->input('NO_BPJS_KETENAGA_KERJAAN');
        $rekrutmen->STATUS_BPJS_KESEHATAN = $request->input('STATUS_BPJS_KESEHATAN');
        $rekrutmen->NO_BPJS_KESEHATAN = $request->input('NO_BPJS_KESEHATAN');
        $rekrutmen->MOBIL_PATROLI = $request->input('MOBIL_PATROLI');
        $rekrutmen->KEPEMILIKAN_MOBIL = $request->input('KEPEMILIKAN_MOBIL');
        $rekrutmen->MOTOR_PATROLI = $request->input('MOTOR_PATROLI');
        $rekrutmen->KEPEMILIKAN_MOTOR = $request->input('KEPEMILIKAN_MOTOR');
        $rekrutmen->PORTO_MALL = $request->input('PORTO_MALL');
        $rekrutmen->PORTO_CLUSTER = $request->input('PORTO_CLUSTER');
        $rekrutmen->PORTO_APARTEMEN = $request->input('PORTO_APARTEMEN');
        $rekrutmen->PORTO_PERKANTORAN = $request->input('PORTO_PERKANTORAN');
        $rekrutmen->PORTO_KAWASAN = $request->input('PORTO_KAWASAN');
        $rekrutmen->NAMA_PEJABAT_TNI = $request->input('NAMA_PEJABAT_TNI');
        $rekrutmen->PANGKAT_PEJABAT_TNI = $request->input('PANGKAT_PEJABAT_TNI');
        $rekrutmen->JABATAN_PEJABAT_TNI = $request->input('JABATAN_PEJABAT_TNI');
        $rekrutmen->RELASI_PEJABAT_TNI = $request->input('RELASI_PEJABAT_TNI');
        $rekrutmen->NAMA_PEJABAT_POLRI = $request->input('NAMA_PEJABAT_POLRI');
        $rekrutmen->PANGKAT_PEJABAT_POLRI = $request->input('PANGKAT_PEJABAT_POLRI');
        $rekrutmen->JABATAN_PEJABAT_POLRI = $request->input('JABATAN_PEJABAT_POLRI');
        $rekrutmen->RELASI_PEJABAT_POLRI = $request->input('RELASI_PEJABAT_POLRI');
        $rekrutmen->HASIL_SELEKSI = $request->input('HASIL_SELEKSI');
        $rekrutmen->STATUS = $request->input('STATUS');
        if($request->hasFile('FOTO_KANTOR'))
        {
         $file = $request->file('FOTO_KANTOR');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/rekrutmen/foto_kantor',$filename);
         $rekrutmen->FOTO_KANTOR = $filename;
        }
        if($request->hasFile('FOTO_AKTA'))
        {
         $file = $request->file('FOTO_AKTA');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/rekrutmen/foto_akta',$filename);
         $rekrutmen->FOTO_AKTA = $filename;
        }
        if($request->hasFile('FOTO_SIO'))
        {
         $file = $request->file('FOTO_SIO');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/rekrutmen/foto_sio',$filename);
         $rekrutmen->FOTO_SIO = $filename;
        }
        if($request->hasFile('FOTO_BPJS_KETENAGA_KERJAAN'))
        {
         $file = $request->file('FOTO_BPJS_KETENAGA_KERJAAN');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/rekrutmen/bpjs_ketenagakerjaan',$filename);
         $rekrutmen->FOTO_BPJS_KETENAGA_KERJAAN = $filename;
        }
        if($request->hasFile('FOTO_BPJS_KESEHATAN'))
        {
         $file = $request->file('FOTO_BPJS_KESEHATAN');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/rekrutmen/bpjs_kesehatan',$filename);
         $rekrutmen->FOTO_BPJS_KESEHATAN = $filename;
        }
        if($request->hasFile('FOTO_REKENING_KORAN'))
        {
         $file = $request->file('FOTO_REKENING_KORAN');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/rekrutmen/rekening_koran',$filename);
         $rekrutmen->FOTO_REKENING_KORAN = $filename;
        }
        if($request->hasFile('FOTO_PEJABAT_TNI'))
        {
         $file = $request->file('FOTO_PEJABAT_TNI');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/rekrutmen/pejabat_tni',$filename);
         $rekrutmen->FOTO_PEJABAT_TNI = $filename;
        }
        if($request->hasFile('FOTO_PEJABAT_POLRI'))
        {
         $file = $request->file('FOTO_PEJABAT_POLRI');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/rekrutmen/pejabat_polri',$filename);
         $rekrutmen->FOTO_PEJABAT_POLRI = $filename;
        }
        
        if($request->hasFile('SPT_PERUSAHAAN'))
        {
         $file = $request->file('SPT_PERUSAHAAN');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/rekrutmen/spt_perusahaan',$filename);
         $rekrutmen->SPT_PERUSAHAAN = $filename;
        }

        $rekrutmen->USER_CREATED = auth()->user()->id;
        $rekrutmen->DATE_CREATED = today();
        $rekrutmen->save();
 
        
        return redirect()->intended('/rekrutmen');

    }

    public function detail(Request $request)
    {
        $id_bujp = $request->id;
        $bujp = bujp::where('ID_BUJP',$id_bujp)->first();
        return view('/detail-rekrutmen',compact('bujp'));
    }
    public function edit(Request $request)
    {
        $id_bujp = $request->id;
        $bujp = bujp::where('ID_BUJP',$id_bujp)->first();
        return view('/edit-rekrutmen',compact('bujp'));
    }
    public function store_edit(Request $request)
    {
        
        $id_bujp = $request->input('ID_BUJP');
        $rekrutmen = bujp::find($id_bujp);
        $rekrutmen->NAMA_BUJP = $request->input('NAMA_BUJP');
        $rekrutmen->TELP_KANTOR = $request->input('TELP_KANTOR');
        $rekrutmen->TGL_TERIMA_COMPANY_PROFILE = $request->input('TGL_TERIMA_COMPANY_PROFILE');
        $rekrutmen->ALAMAT = $request->input('ALAMAT');
        $rekrutmen->UNDANGAN_PRESENTASI = $request->input('UNDANGAN_PRESENTASI');
        $rekrutmen->TGL_PRESENTASI = $request->input('TGL_PRESENTASI');
        $rekrutmen->ALASAN_TIDAK_DIUNDANG = $request-> input('ALASAN_TIDAK_DIUNDANG');
        $rekrutmen->KEPEMILIKAN_KANTOR = $request->input('KEPEMILIKAN_KANTOR');
        $rekrutmen->PERIODE_SEWA= $request->input('PERIODE_SEWA');
        $rekrutmen->AKTA_PENDIRIAN_PERUSAHAAN = $request->input('AKTA_PENDIRIAN_PERUSAHAAN');
        $rekrutmen->TGL_PENDIRIAN = $request->input('TGL_PENDIRIAN');
        $rekrutmen->AKTA_PERUBAHAN = $request->input('AKTA_PERUBAHAN');
        $rekrutmen->NO_NOTARIS = $request->input('NO_NOTARIS');
        $rekrutmen->NO_SIO =  $request->input('NO_SIO');
        $rekrutmen->MASA_BERLAKU_SIO = $request->input('MASA_BERLAKU_SIO');
        $rekrutmen->STATUS_BPJS_KETENAGA_KERJAAN = $request->input('STATUS_BPJS_KETENAGA_KERJAAN');
        $rekrutmen->NO_BPJS_KETENAGA_KERJAAN = $request->input('NO_BPJS_KETENAGA_KERJAAN');
        $rekrutmen->STATUS_BPJS_KESEHATAN = $request->input('STATUS_BPJS_KESEHATAN');
        $rekrutmen->NO_BPJS_KESEHATAN = $request->input('NO_BPJS_KESEHATAN');
        $rekrutmen->MOBIL_PATROLI = $request->input('MOBIL_PATROLI');
        $rekrutmen->KEPEMILIKAN_MOBIL = $request->input('KEPEMILIKAN_MOBIL');
        $rekrutmen->MOTOR_PATROLI = $request->input('MOTOR_PATROLI');
        $rekrutmen->KEPEMILIKAN_MOTOR = $request->input('KEPEMILIKAN_MOTOR');
        $rekrutmen->PORTO_MALL = $request->input('PORTO_MALL');
        $rekrutmen->PORTO_CLUSTER = $request->input('PORTO_CLUSTER');
        $rekrutmen->PORTO_APARTEMEN = $request->input('PORTO_APARTEMEN');
        $rekrutmen->PORTO_PERKANTORAN = $request->input('PORTO_PERKANTORAN');
        $rekrutmen->PORTO_KAWASAN = $request->input('PORTO_KAWASAN');
        $rekrutmen->NAMA_PEJABAT_TNI = $request->input('NAMA_PEJABAT_TNI');
        $rekrutmen->PANGKAT_PEJABAT_TNI = $request->input('PANGKAT_PEJABAT_TNI');
        $rekrutmen->JABATAN_PEJABAT_TNI = $request->input('JABATAN_PEJABAT_TNI');
        $rekrutmen->RELASI_PEJABAT_TNI = $request->input('RELASI_PEJABAT_TNI');
        $rekrutmen->NAMA_PEJABAT_POLRI = $request->input('NAMA_PEJABAT_POLRI');
        $rekrutmen->PANGKAT_PEJABAT_POLRI = $request->input('PANGKAT_PEJABAT_POLRI');
        $rekrutmen->JABATAN_PEJABAT_POLRI = $request->input('JABATAN_PEJABAT_POLRI');
        $rekrutmen->RELASI_PEJABAT_POLRI = $request->input('RELASI_PEJABAT_POLRI');
        $rekrutmen->HASIL_SELEKSI = $request->input('HASIL_SELEKSI');
        $rekrutmen->STATUS = $request->input('STATUS');
        if($request->hasFile('FOTO_KANTOR'))
        {
         $file = $request->file('FOTO_KANTOR');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/rekrutmen/foto_kantor',$filename);
         $rekrutmen->FOTO_KANTOR = $filename;
        }
        if($request->hasFile('FOTO_AKTA'))
        {
         $file = $request->file('FOTO_AKTA');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/rekrutmen/foto_akta',$filename);
         $rekrutmen->FOTO_AKTA = $filename;
        }
        if($request->hasFile('FOTO_SIO'))
        {
         $file = $request->file('FOTO_SIO');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/rekrutmen/foto_sio',$filename);
         $rekrutmen->FOTO_SIO = $filename;
        }
        if($request->hasFile('FOTO_BPJS_KETENAGA_KERJAAN'))
        {
         $file = $request->file('FOTO_BPJS_KETENAGA_KERJAAN');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/rekrutmen/bpjs_ketenagakerjaan',$filename);
         $rekrutmen->FOTO_BPJS_KETENAGA_KERJAAN = $filename;
        }
        if($request->hasFile('FOTO_BPJS_KESEHATAN'))
        {
         $file = $request->file('FOTO_BPJS_KESEHATAN');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/rekrutmen/bpjs_kesehatan',$filename);
         $rekrutmen->FOTO_BPJS_KESEHATAN = $filename;
        }
        if($request->hasFile('FOTO_REKENING_KORAN'))
        {
         $file = $request->file('FOTO_REKENING_KORAN');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/rekrutmen/rekening_koran',$filename);
         $rekrutmen->FOTO_REKENING_KORAN = $filename;
        }
        if($request->hasFile('FOTO_PEJABAT_TNI'))
        {
         $file = $request->file('FOTO_PEJABAT_TNI');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/rekrutmen/pejabat_tni',$filename);
         $rekrutmen->FOTO_PEJABAT_TNI = $filename;
        }
        if($request->hasFile('FOTO_PEJABAT_POLRI'))
        {
         $file = $request->file('FOTO_PEJABAT_POLRI');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/rekrutmen/pejabat_polri',$filename);
         $rekrutmen->FOTO_PEJABAT_POLRI = $filename;
        }
        
        if($request->hasFile('SPT_PERUSAHAAN'))
        {
         $file = $request->file('SPT_PERUSAHAAN');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/rekrutmen/spt_perusahaan',$filename);
         $rekrutmen->SPT_PERUSAHAAN = $filename;
        }

        $rekrutmen->USER_MODIFIED = auth()->user()->id;
        $rekrutmen->DATE_MODIFIED = today();
        $rekrutmen->update();
       return redirect()->intended($id_bujp.'/detail-rekrutmen');
 
    }
    public function destroy($id)
    {
        bujp::destroy($id);
        return redirect('/rekrutmen');
    }
}
