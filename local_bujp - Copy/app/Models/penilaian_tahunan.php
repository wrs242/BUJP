<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penilaian_tahunan extends Model
{
    use HasFactory;

    protected $table = 'penilaian_tahunan';
    public $timestamps = false;
    protected $guarded = [];
    protected  $primaryKey = 'ID_PENILAIAN_TAHUNAN';

    public function bujp()
 {
   return $this->belongsTo(bujp::class, 'ID_BUJP');
 }
}

