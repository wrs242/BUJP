<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    protected $table = 'unit';
    public $timestamps = false;
    protected $guarded = [];
    use HasFactory;
}