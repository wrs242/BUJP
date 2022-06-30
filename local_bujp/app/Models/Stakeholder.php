<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Iatstuti\Database\Support\NullableFields;
use Illuminate\Database\Eloquent\Model;

class Stakeholder extends Model
{
    use HasFactory;
    protected $table = 'stakeholder';
    public $timestamps = false;
    protected $primaryKey = 'ID_STAKEHOLDER';
    
    protected $guarded = [];
    protected $nullable = ['NAMA_P_LAMA','PANGKAT_P_LAMA', 'MULAI_MENJABAT_P_LAMA', 'AKHIR_MENJABAT_P_LAMA','JUMLAH_PERSONEL_P_LAMA', 'LOKASI_TUGAS_BARU_P_LAMA', 'TAHUN_ANGKATAN_P_LAMA', 'TELP_P_LAMA', 'LOKASI_TUGAS_LAMA_P_BARU', 'FOTO_P_LAMA'];

    public function user_created()
    {
        return $this->belongsTo('App\Models\User', 'USER_CREATED');
    }
    public function user_modified()
    {
        return $this->belongsTo('App\Models\User', 'USER_MODIFIED');
    }
}
