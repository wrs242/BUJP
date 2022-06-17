<?php

namespace App\Http\Controllers;

use App\Models\bujp;
use App\Models\unit;
use App\Models\kontrak;
use Illuminate\Http\Request;

class BujpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bujp = bujp::all();
        return view('data-bujp',compact('bujp'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function entry()
    {
        $nama_bujp = bujp::all();
        $filter_bujp = $nama_bujp->where('STATUS','Kerjasama');
        $unit = unit::all();
        return view('entry-bujp',compact('filter_bujp','unit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ID_BUJP = $request->input('NAMA_BUJP');
        $bujp = bujp::find( $ID_BUJP);
        $bujp->ID_UNIT = $request->input('NAMA_UNIT');
        $bujp->OBJEK_PENGAMANAN = $request->input('OBJEK_PENGAMANAN');
        $bujp->JUMLAH_PERSONEL = $request->input('JUMLAH_PERSONEL');
        $bujp->STATUS = $request->input('STATUS');
        $bujp->KETERANGAN_STATUS = $request->input('KETERANGAN_STATUS');
        $bujp->HARGA_PERORANG = $request->input('HARGA_PERORANG');
        $bujp->TAKE_HOME_PAY_RUPIAH = $request->input('TAKE_HOME_PAY_RUPIAH');
        $bujp->TAKE_HOME_PAY_PERSEN = $request->input('TAKE_HOME_PAY_PERSEN');
        $bujp->SANKSI = $request->input('SANKSI');
        $bujp->KETERANGAN_SANKSI = $request->input('KETERANGAN_SANKSI');
        $bujp->NAMA_DIREKTUR = $request->input('NAMA_DIREKTUR');
        $bujp->TELP_DIREKTUR = $request->input('TELP_DIREKTUR');
        $bujp->TELP_KANTOR = $request->input('TELP_KANTOR');
        $bujp->update();
        return redirect()->intended('/bujp');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bujp  $bujp
     * @return \Illuminate\Http\Response
     */
    public function findtelpkantor(Request $request)
    {
        //$p=bujp::select('TELP_KANTOR')->where('id_bujp',$request->id)->first();
		
    	//return response()->json($p);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bujp  $bujp
     * @return \Illuminate\Http\Response
     */
    public function entry_kontrak(Request $request)
    {
        
        $ID_BUJP = $request->id;
        $kontrak = kontrak::all();
        $bujp = bujp::all();
        $filter_kontrak = $kontrak->where('ID_BUJP',$ID_BUJP);
        $filter_bujp = $bujp->where('ID_BUJP',$ID_BUJP);

        if (empty($filter_kontrak)){
            $filter_kontrak = null;
        }
        else{
        
        };
        return view('/entry-kontrak',compact('filter_bujp','filter_kontrak'));
    }

    public function store_kontrak(Request $request)
    {
        
        $kontrak = new Kontrak;
        $kontrak->AWAL_KONTRAK = $request->input('AWAL_KONTRAK');
        $kontrak->AKHIR_KONTRAK = $request->input('AKHIR_KONTRAK');
        $kontrak->NO_SPK = $request->input('NO_SPK');
        $kontrak->TAHUN_KONTRAK = $request->input('TAHUN_KONTRAK');
        $kontrak->KONTRAK_KE = $request->input('KONTRAK_KE');
        $kontrak->ADENDUM = $request->input('ADENDUM');
        $kontrak->KETERANGAN_ADENDUM = $request->input('KETERANGAN_ADENDUM');
        $kontrak->ID_BUJP = $request->input('ID_BUJP');

        if($request->hasFile('UPLOAD_SPK'))
        {
         $file = $request->file('UPLOAD_SPK');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/SPK_Kontrak/',$filename);
         $kontrak->UPLOAD_SPK = $filename;
         
        }
        $kontrak->save();
 
        
        return redirect()->back();
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bujp  $bujp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bujp $bujp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bujp  $bujp
     * @return \Illuminate\Http\Response
     */
    public function destroy(bujp $bujp)
    {
        //
    }
}
