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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        if(Auth::user()->rol = "Admin"){
            return view('dashboard.dashboard');
        } else{
            return view('vistas.Index');
        }
    }
    
    public function listCategoria(Request $request){
        if($request->ajax()){
            $data = Categoria::latest()->get();
            return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '<button type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Editar</button>';
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
                $url = route('edit.tienda');
                $btn = '<form action="'. $url .'" method="GET">
                <input type="hidden" name="id" value="' . $row->id . '">
                <button type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Editar</button>
                </form>';
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
                <div class="grid grid-cols-12">
                                <div class="col-span-6"><button type="submit" 
                                        class="bg-blue-500 flex justify-center items-center w-full text-white rounded-md focus:outline-none">
                                        Editar</button> </div>
                                <div class="col-span-6">
                                    <button type="button" id="' . $row->id . '"
                                    class="bg-red-700 btn flex justify-center items-center w-full text-white rounded-md focus:outline-none"
                                    onclick="openModal(' . $row->id . ')">Eliminar</button> </div>
                            </div>
                </form>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('dashboard.lista_Producto');
    }

    public function createProduct(Request $request){
        if(!isset($request->id)){
            $producto = Producto::get();
            $tienda = Tienda::all();
            return view('dashboard.create_producto')->with(['tienda' => $tienda, 'producto' => $producto]);
        }

        $producto = Producto::where('id', $request->id)->first();
        $tienda = Tienda::all();
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
        $file = $request->file('img');

        $imagen = time()."_".$file->getClientOriginalName();
        $imagen = str_replace(' ','', $imagen);
        \Storage::disk('local')->put($imagen, \File::get($file));

        $producto->titulo = $request->titulo;
        $producto->descripcion = $request->descripcion;
        $producto->img = $imagen;
        $producto->enlace_compra = $enlace->id;
        $producto->id_tienda = $request->tienda;
        $producto->save();

        return Redirect()->back();
    }

    public function editTienda(Request $request){
        $tienda = Tienda::where('id', $request->id)->first();

        return view('dashboard.create_tienda')->with(['tienda' => $tienda]);
    }

    public function updateTienda(Request $request){
        $tienda = Tienda::where('id', $request->id)->first();

        $file = $request->file('logo');

        $imagen = time()."_".$file->getClientOriginalName();
        $imagen = str_replace(' ','', $imagen);
        \Storage::disk('local')->put($imagen, \File::get($file));

        $tienda->razon_social = $request->nombre;
        $tienda->descripcion = $request->descripcion;
        $tienda->logo = $request->logo;
        $tienda->instagram = $request->instagram;
        $tienda->facebook = $request->facebook;
        $tienda->save();

        return Redirect()->back();

    }

    public function deleteProducto(Request $request){
        $producto = Producto::findOrFail($request->id);

        $producto->delete();
        return redirect()->route('list.producto');
    }

    public function allClear(){
        \Artisan::call('route:clear');
        \Artisan::call('view:clear');
        \Artisan::call('config:clear');
        \Artisan::call('cache:clear');
    }

}
