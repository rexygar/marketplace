<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Tienda;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MainController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        if (Auth::check()) {
            $rol = Auth::user();
            if ($rol->rol == 'Admin') {
                return view('dashboard.dashboard');
            }
        }
        return view('home');
    }

    public function index2()
    {
        return redirect('/');
    }

    public static function show_Tiendas()
    { //mostrar todas las tiendas ->with('producto ,$(product')->producto()

        $tiendas_Textil = Tienda::where('id_categoria', 1)->get();

        $tiendas_Diseño = Tienda::where('id_categoria', 2)->get();

        $tiendas_Salud = Tienda::where('id_categoria', 3)->get();

        $tiendas_Casa = Tienda::where('id_categoria', 4)->get();

        $t_Gas = Tienda::where('id_categoria', 5)->get();

        $tiendas_Naturaleza = Tienda::where('id_categoria', 6)->get();
        // return dd($tiendas_Salud);

        return View('Vistas.Cats')->with(
            'tiendas_Casa',
            $tiendas_Casa
        )->with(
            'tiendas_Diseño',
            $tiendas_Diseño
        )->with(
            't_Gas',
            $t_Gas
        )->with(
            'tiendas_Naturaleza',
            $tiendas_Naturaleza
        )->with(
            'tiendas_Salud',
            $tiendas_Salud
        )->with(
            'tiendas_Textil',
            $tiendas_Textil
        );
    }

    public static function show_Tienda($id_tienda)
    { //mostrar tienda y todos los productos de una tienda
        $tienda = Tienda::find($id_tienda)->producto();
        $publicacion = DB::table('tienda')->where('tienda.id', $id_tienda)
            ->leftJoin('producto', 'tienda.id', '=', 'producto.id_tienda')
            ->select(
                'tienda.*',
                'producto.*',
            )
            ->orderBy('producto.id', 'DESC')
            ->get();
        if ($publicacion) {
            $vacia = false;
            // dd($tienda);
            return View('Vistas.Tienda')->with(
                'tienda',
                $publicacion
            )->with(
                'vacia',
                $vacia
            );
        } else {
            $vacia = true;

            dd($vacia);
            return View('Vistas.Tienda')->with(
                'tienda',
                $publicacion
            )->with(
                'vacia',
                $vacia
            );
        }
    }

    // public static function show_Categorias()
    // { //mostrar tiendas en base a la categoria

    //     return redirect('/');
    // }

    public static function show_Productos()
    { //mostrar todos los productos

        return redirect('/');
    }
}
