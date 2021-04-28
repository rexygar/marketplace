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
        return view('home');
    }

    public function index2()
    {
        if(Auth::user()->rol = "Admin"){
            return view('dashboard.dashboard');
        } else{
            return view('vistas.index');
        }
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

    public static function show_Categorias($id_tienda)
    { //mostrar todas las tiendas ->with('producto ,$(product')->producto()

        $tiendas = Tienda::where('id_categoria', $id_tienda)->get();
        $portada = "";
        switch ($id_tienda) {
            case  1:
                $portada = '\img\cats\textil.png';
                break;
            case 2:
                $portada = '\img\cats\diseño.png';
                break;
            case 3:
                $portada = '\img\cats\salud.png';
                break;
            case  4:
                $portada = '\img\cats\casa.png';
                break;
            case  5:
                $portada = '\img\cats\gastro.png';
                break;
            case  6:
                $portada = '\img\cats\naturaleza.png';
                break;

            default:
                # code...
                break;
        }

        // return dd($tiendas_Salud);

        return View('Vistas.Categorias')->with(
            'tiendas',
            $tiendas
        )->with(
            'portada',
            $portada
        );
    }
    public static function show_Productos()
    { //mostrar todos los productos

        return redirect('/');
    }

}
