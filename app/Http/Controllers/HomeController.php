<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\post;

class HomeController extends Controller
{

  // public function first()
  // {
  //   //$shows = post::all();
  //   $shows=post::orderBy('updated_at','desc')->get();
  //   return view('index',compact('shows'));
  // }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('home');
    }

    public function sale()
    {
        return view('layouts.sale');
    }
}
