<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //both do the same
        //$request->session()->put(['dan'=>'the boss']);
        //session(['libby'=>'student']);
        //echo $request->session()->get('libby');
        //delete sessions
        //session()->forget('libby');
        //session()->flush();

        //flash messages just do for one request
        //$request->session()->flash('message', 'Post has been created');
        return $request->session()->get('message');
        //return view('home');
    }
}
