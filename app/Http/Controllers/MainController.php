<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactanosMaillable;
use App\Models\blog;
use Illuminate\Support\Facades\Auth;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Tienda;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        if (Auth::user()->rol = "Admin") {
            return view('dashboard.dashboard');
        } else {
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

        $publicacion = DB::table('tienda')->where('tienda.id', $id_tienda)
            ->leftJoin('producto', 'tienda.id', '=', 'producto.id_tienda')
            ->leftJoin('enlace_compra', 'producto.enlace_compra', '=', 'enlace_compra.id')
            ->select(
                'tienda.*',
                'producto.*',
                'enlace_compra.link',
            )
            ->orderBy('producto.id', 'DESC')
            ->get();
        if ($publicacion) {
            $vacia = false;

            return View('Vistas.Tienda')->with(
                'tienda',
                $publicacion
            )->with(
                'vacia',
                $vacia
            );
        } else {
            $vacia = true;
            return View('Vistas.Tienda')->with(
                'tienda',
                $publicacion
            )->with(
                'vacia',
                $vacia
            );
        }
    }

    public static function show_Categorias($id_cat)
    { //mostrar todas las tiendas ->with('producto ,$(product')->producto()
        if ($id_cat > 0 && $id_cat < 7) {

            $tiendas = Tienda::where('id_categoria', $id_cat)->get();
            $portada = "";
            switch ($id_cat) {
                case  1:
                    $portada = '\img\cats\textil.png';
                    $fondo = '/TEXTIL-min.jpg';
                    break;
                case 2:
                    $portada = '\img\cats\diseño.png';
                    $fondo = '/DISEÑO-min.jpg';
                    break;
                case 3:
                    $portada = '\img\cats\salud.png';
                    $fondo = '/BELLEZA Y CUIDADO-min.jpg';
                    break;
                case  4:
                    $portada = '\img\cats\casa.png';
                    $fondo = '/DECORACION-min.jpg';
                    break;
                case  5:
                    $portada = '\img\cats\gastro.png';
                    $fondo = '/GASTRONOMIA-min.jpg';
                    break;
                case  6:
                    $portada = '\img\cats\naturaleza.png';
                    $fondo = '/NATURALEZA-min.jpg';
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
            )->with(
                'fondo',
                $fondo
            );
        } else {
            return View('componentes.404');
        }
    }
    public static function show_Blog()
    { //mostrar todas las tiendas ->with('producto ,$(product')->producto()

        $blogs = blog::all()->sortByDesc('created_at');

        if (sizeof($blogs) > 0) {
            return View('Vistas.Blog')->with(
                'blogs',
                $blogs
            );
        } else {
            $blogs = null;
            // dd($blogs);
            return View('Vistas.Blog')->with(
                'blogs',
                $blogs
            );
        }
    }
    public static function show_Productos()
    { //mostrar todos los productos

        return redirect('/');
    }

    public function search(Request $request)
    {

        $search = preg_replace('([^A-Za-z0-9 ])', '', trim($request->search));
        return redirect('/Search' . '/' . $search);
    }
    public static function search_Tiendas(Request $request)
    {
        $busqueda = $request->search;
        $portadas = [];
        // $tiendas = Tienda::where('razon_social', 'like', '%' . $busqueda . '%')->get();
        //
        $tiendas = Tienda::where('razon_social', 'like', '%' . $busqueda . '%')
            ->leftJoin('categorias', 'tienda.id_categoria', '=', 'categorias.id')
            ->select(
                'tienda.*',
                'categorias.nombre',
            )
            ->orderBy('tienda.id', 'DESC')
            ->get();

        // 

        if ($tiendas != null) {
            $i = 0;
            foreach ($tiendas as $tienda_cat) {
                $i++;
                switch ($tienda_cat->id_categoria) {
                    case  1:
                        $portadas[$i] = '/TEXTIL-min.jpg';
                        break;
                    case 2:
                        $portadas[$i] = '/DISEÑO-min.jpg';
                        break;
                    case 3:
                        $portadas[$i] = '/BELLEZA Y CUIDADO-min.jpg';
                        break;
                    case  4:
                        $portadas[$i] = '/DECORACION-min.jpg';
                        break;
                    case  5:
                        $portadas[$i] = '/GASTRONOMIA-min.jpg';
                        break;
                    case  6:
                        $portadas[$i] = '/NATURALEZA-min.jpg';
                        break;

                    default:
                        # code...
                        break;
                }
            }
        } else {
            $portadas = null;
        }

        //


        return view('Vistas.Busqueda')->with(
            'tiendas',
            $tiendas
        )->with(
            'portadas',
            $portadas
        );
    }
    public function contact(Request $request)
    {
        try {
            if ($request->ajax()) {
                $correo = new ContactanosMaillable($request->all());
                Mail::to("Autogestionomil@gmail.com")->send($correo);

                return ['message' => "Successful"];
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
