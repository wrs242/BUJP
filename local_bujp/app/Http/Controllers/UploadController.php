<?php

namespace App\Http\Controllers;
use App\Models\pedoman_keamanan;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
 {
    
    $find = pedoman_keamanan::where('FILE_PEDOMAN','standarisasi_kompetensi.pdf')->first();
    $file = $request->file('FILE_PEDOMAN');
        if($request->hasFile('FILE_PEDOMAN'))
    {
    if($find !== null) {
        $pedoman_keamanan = pedoman_keamanan::where('FILE_PEDOMAN','standarisasi_kompetensi.pdf')->first();
        $pedoman_keamanan->FILE_PEDOMAN = $request->file('FILE_PEDOMAN');
        $filename_new = "standarisasi_kompetensi.pdf";
        $file->move('uploads/pedoman',$filename_new);
        $pedoman_keamanan->FILE_PEDOMAN = $filename_new;
        $pedoman_keamanan->USER_MODIFIED = auth()->user()->id;
        $pedoman_keamanan->DATE_MODIFIED = today();
        $pedoman_keamanan->update();
      }
      else {
        $pedoman_keamanan = new pedoman_keamanan;
        $filename_new = 'standarisasi_kompetensi.pdf';
        $file->move('uploads/pedoman',$filename_new);
        $pedoman_keamanan->FILE_PEDOMAN = $filename_new;
        $pedoman_keamanan->USER_MODIFIED = auth()->user()->id;
        $pedoman_keamanan->DATE_MODIFIED = today();
        $pedoman_keamanan->save();
        
      }
    }
      


      $pedoman_keamanan = pedoman_keamanan ::all();
      $pedoman_keamanan = $pedoman_keamanan->where('FILE_PEDOMAN','standarisasi_kompetensi.pdf')->first();
      
      return view('/standarisasi-kompetensi',compact('pedoman_keamanan'));
}

 public function index ()
 {
        $pedoman_keamanan = pedoman_keamanan ::all();
        $pedoman_keamanan = $pedoman_keamanan->where('FILE_PEDOMAN','standarisasi_kompetensi.pdf')->first();
        
        return view('/standarisasi-kompetensi',compact('pedoman_keamanan'));
        
}
}
