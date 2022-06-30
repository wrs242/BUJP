<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedoman_keamanan extends Model
{
    protected $table = 'pedoman_keamanan';
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'ID_PEDOMAN';

    public function user()
    {
      return $this->belongsTo('App\Models\User', 'USER_MODIFIED');
    }
}
