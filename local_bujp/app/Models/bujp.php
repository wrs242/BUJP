<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bujp extends Model
{
    protected $table = 'bujp';
    public $timestamps = false;
    protected $guarded = [];
    protected  $primaryKey = 'ID_BUJP';
    use HasFactory;

    public function unit()
    {
      return $this->belongsTo('App\Models\Unit', 'ID_UNIT');
    }

    public function user_created()
    {
        return $this->belongsTo('App\Models\User', 'USER_CREATED');
    }
    public function user_modified()
    {
        return $this->belongsTo('App\Models\User', 'USER_MODIFIED');
    }
}
