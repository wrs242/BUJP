<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\bujp;

class DashboardController extends Controller
{
    public function index()
    {
        $bujp = bujp::where('status','kerjasama');
        return view('master',compact('bujp'));
    }
}
