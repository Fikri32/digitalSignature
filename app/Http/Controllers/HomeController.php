<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\gatepass;
use App\Barang;
use App\Gatebar;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $gate = gatepass::where('status','=','4')->get();
        // dd($gate); 
        return view('beranda',compact('gate'));
    }
}
