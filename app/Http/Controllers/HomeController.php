<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Role;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function index()
    // {
    //     return view('home');
    // }

    public function index()
    {
        $totalPegawai = Pegawai::count();
        $totalRole = Role::count();

        return view('crewmin.index', compact('totalPegawai', 'totalRole'));
    }

    public function adminIndex(){
        return view('admin.admin-dashboard');
    }
}
