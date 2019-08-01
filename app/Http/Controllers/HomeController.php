<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dusun;
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
        $data=['dusun' => Dusun::get()];
        return view('home', $data);
    }
}
