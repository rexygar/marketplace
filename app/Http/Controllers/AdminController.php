<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;

class AdminController extends Controller
{
    public function index(){
        return view('dashboard.dashboard');
    }

    public function getCategoria(){
        return Categoria::whereNull('anterior')->get();
    }
    
}
