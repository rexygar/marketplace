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
            $rol = Auth::rol();
            if($rol == 'ADMIN'){
                return redirect()->route('admin.index');
            }
        }
        return view('index');
    }

    public function index2(){
        return redirect('/');
    }
    

    
}
