<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mensaje;
use App\Persona;
use App\Mail\Emergencia;
use App\Mail\Zonauno;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\MensajeFormRequest;
use DB;
class MensajeController extends Controller
{
    public function index(Request $request){
        if($request){
            $query=trim($request->get('searchText'));
            $mensajes=DB::table('tbl_mensaje as m')
            ->join('tbl_boton as b', 'm.idBoton', '=', 'b.idBoton')
            ->select('m.idMensaje','m.tituloMensaje', 'm.textoMensaje', 'm.fechaMensaje', 'm.emisorMensaje', 'b.zonaBoton')
            ->where('m.emisorMensaje', 'LIKE', '%'.$query.'%')
            ->orderBy('idMensaje', 'desc')
            ->paginate(4);
            return view('mensaje.mensaje.index', ['mensajes'=>$mensajes, 'searchText'=>$query]);
        }
    }
    public function create(){
        $personas=DB::table('tbl_persona')->where('condicion', '=', '1')->get();
        $botones=DB::table('tbl_boton')->where('estadoBoton', '=', '1')->get();
        return view('mensaje.mensaje.create', ['personas'=>$personas, 'botones'=>$botones]);
    }
    public function store(MensajeFormRequest $request){
        //guardar mensaje
        $fechaActual=date('Y-m-d');
        $mensaje=new Mensaje();
        $mensaje->tituloMensaje=$request->get('tituloMensaje');
        $mensaje->textoMensaje=$request->get('textoMensaje');
        $mensaje->fechaMensaje=$fechaActual;
        $mensaje->emisorMensaje=Auth::user()->usuario;
        $mensaje->idBoton='4';
        $mensaje->save();

        //enviar mensaje
        $personas = Persona::pluck('emailPersona');
        Mail::to($personas)->send(new Emergencia($mensaje));
        return Redirect::to('mensaje/mensaje');
    }
    public function mensajeZonaUno(){
        $fechaActual=date('Y-m-d');
        $mensaje=new Mensaje();
        $mensaje->tituloMensaje='Emergencia';
        $mensaje->textoMensaje='Esta ocurriendo una emergencia en la Zona 1';
        $mensaje->fechaMensaje=$fechaActual;
        $mensaje->emisorMensaje=Auth::user()->usuario;
        $mensaje->idBoton='1';
        $mensaje->save();

        $personas = Persona::pluck('emailPersona');
        Mail::to($personas)->send(new Zonauno($mensaje));
        return Redirect::to('mensaje/mensaje');
    }
}
