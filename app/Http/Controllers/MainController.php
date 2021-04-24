<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function __construct()
    {
        
    }

    public function index(){
        if(Auth::check()){
            $rol = Auth::user();
            if($rol->rol == 'Admin'){
                return view('dashboard.dashboard');
            }
        }
        return view('home');
    }

    public function index2(){
        return redirect('/');
    }
    

    
}