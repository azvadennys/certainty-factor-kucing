<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Pengetahuan;
use App\Models\Penyakit;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\View\View;

class LandingPage extends Controller
{
    public function index()
    {
        $data = [
            'total_gejala' => Gejala::all()->count(),
            'total_penyakit' => Penyakit::all()->count(),
            'total_pengetahuan' => Pengetahuan::all()->count(),
            'total_pengguna' => User::all()->count(),
        ];
        return view('page.index', $data);
    }
}
