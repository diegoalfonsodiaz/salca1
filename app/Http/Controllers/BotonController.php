<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Boton;
use App\Persona;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\BotonFormRequest;
use DB;

class BotonController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $query=trim($request->get('searchText'));
            $botones=DB::table('tbl_boton')->where('zonaBoton', 'LIKE', '%'.$query.'%')
            ->where('estadoBoton','=','1')
            ->orderBy('idBoton', 'desc')
            ->paginate(4);
            return view('boton.boton.index', ['botones'=>$botones, 'searchText'=>$query]);
        }
    }
    public function store(Request $request)
    {
        if($request->input('ON1')){
            file_put_contents("output1.php", "salida1=ON"); 
            return view('boton.boton.index');
        }
        else if($request->input('OFF1')){
            file_put_contents("output1.php", "salida1=OFF");
            return view('boton.boton.index');
        }
        else if($request->input('ON2')){
            file_put_contents("output2.php", "salida2=ON");
            return view('boton.boton.index');
        }
        else if($request->input('OFF2')){
            file_put_contents("output2.php", "salida2=OFF");
            return view('boton.boton.index');
        }
        else if($request->input('ON3')){
            file_put_contents("output3.php", "salida3=ON");
            return view('boton.boton.index');
        }
        else if($request->input('OFF3')){
            file_put_contents("output3.php", "salida3=OFF");
            return view('boton.boton.index');
        }
        else if($request->input('ON4')){
            file_put_contents("output4.php", "salida4=ON");
            return view('boton.boton.index');
        }
        else if($request->input('OFF4')){
            file_put_contents("output4.php", "salida4=OFF");
            return view('boton.boton.index');
        }
        else if($request->input('ON5')){
            file_put_contents("output5.php", "salida5=ON");
            return view('boton.boton.index');
        }
        else if($request->input('OFF5')){
            file_put_contents("output5.php", "salida5=OFF");
            return view('boton.boton.index');
        }

    }    
}
