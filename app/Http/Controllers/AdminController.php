<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\EnlaceCompra;
use App\Models\Images;
use App\Models\Producto;
use App\Models\Tienda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index(){
        if(Auth::user()->rol = "Admin"){
            return view('dashboard.dashboard');
        } else{
            return view('vistas.index');
        }
    }
    
    public function listCategoria(Request $request){
        if($request->ajax()){
            $data = Categoria::latest()->get();
            return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('dashboard.list_categoria');
    }

    public function listTiendas(Request $request){
        if($request->ajax()){
            $data = Tienda::latest()->get();
            return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('dashboard.list_tienda');
    }

    public function listProductos(Request $request){
        if($request->ajax()){
            $data = Producto::latest()->get();
            return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function($row){
                $url = route('edit.product');
                $btn = '<form action="'. $url .'" method="GET">
                <input type="hidden" name="id" value="' . $row->id . '">
                <button type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Ver</button>
                </form>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('dashboard.lista_producto');
    }

    public function createProduct(Request $request){
        if(!isset($request->id)){
            $producto = Producto::get();
            $tienda = Tienda::all();
            return view('dashboard.create_producto')->with(['tienda' => $tienda, 'producto' => $producto]);
        }

        $producto = Producto::where('id', $request->id)->first();
        $tienda = Tienda::where('id', $producto->id)->get();
        $enlace = EnlaceCompra::where('id', $producto->enlace_compra)->first();

        return view('dashboard.create_producto')->with(['producto' => $producto, 'tienda' => $tienda, 'enlace' => $enlace]);
    }

    public function addProduct(Request $request){
        $enlace = EnlaceCompra::where('link', $request->enlace)->first();
        if($enlace == null || !isset($enlace->id)){
            $enlace = new EnlaceCompra();
        }

        $enlace->link = $request->enlace;
        $enlace->save();

        $producto = Producto::where('id', $request->id)->first();
        if($producto == null || !isset($producto->id)){
            $producto = new Producto();
        }

        $producto->titulo = $request->titulo;
        $producto->descripcion = $request->descripcion;
        $producto->img = $request->img;
        $producto->enlace_compra = $enlace->id;
        $producto->id_tienda = $request->tienda;
        $producto->save();

        return Redirect()->back();
    }
}
