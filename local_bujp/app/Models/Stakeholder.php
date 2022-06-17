<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stakeholder extends Model
{
    use HasFactory;
    protected $table = 'stakeholder';
    public $timestamps = false;
    protected $guarded = [];
}
