<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function index(Request $request)
    {
        $a = Auth()->check();
        $b = Auth()->user()->name;
        $c = Auth()->user()->id;
        if ($a && $b === $b) {
            $login = $request->session()->put('login', $b);
            $login = $request->session()->get('login');

            $idd = $request->session()->put('id', $c);
            $idd = $request->session()->get('id');
            return view('loker.index');
        }else {
            return "Halaman Tidak Ditemukan";
        }
    }

    public function login()
    {
        return view('auth.login');
    }
}
