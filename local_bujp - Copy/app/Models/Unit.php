<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    protected $table = 'unit';
    public $timestamps = false;
    protected $guarded = [];
    protected  $primaryKey = 'ID_UNIT';
    use HasFactory;

    public function bujp()
 {
   return $this->hasMany(bujp::class, 'ID_BUJP');
 }
}
