<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class DashboardController extends Controller
{
    public function index() {
        $jumlahMahasiswa = Mahasiswa::count();
        return view('dashboard', compact('jumlahMahasiswa'));
    }
}