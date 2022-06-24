<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kontrol_bulanan extends Model
{
    protected $table = 'kontrol_bulanan';
    public $timestamps = false;
    protected $guarded = [];
    protected  $primaryKey = 'ID_KONTROL';
    use HasFactory;

    public function bujp()
 {
   return $this->belongsTo(bujp::class, 'ID_BUJP');
 }
 
}
