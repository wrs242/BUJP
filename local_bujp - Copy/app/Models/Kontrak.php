<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kontrak extends Model
{
    protected $table = 'kontrak';
    public $timestamps = false;
    protected $guarded = [];
    protected  $primaryKey = 'ID_KONTRAK';
    use HasFactory;
}
