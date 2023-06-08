<?php

namespace App\Http\Controllers;

use App\Models\Calon_Penerima;
use App\Models\Penilaian;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "Dashboard";
        $cpenerima = Calon_Penerima::count();
        $penerima = Penilaian::where('total', '>', 50)->get()->count();
        return view('dashboard.index', compact('title', 'cpenerima', 'penerima'));
    }
}
