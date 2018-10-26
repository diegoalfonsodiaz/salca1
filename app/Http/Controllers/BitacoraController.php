<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Bitacora;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\BitacoraFormRequest;
use DB;
class BitacoraController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $query=trim($request->get('searchText'));
            $bitacoras=DB::table('tbl_bitacora as b')
            ->join('tbl_persona as p', 'b.idPersona', '=', 'p.idPersona')
            ->join('tbl_emergencia as e', 'b.idEmergencia', '=', 'e.idEmergencia')
            ->select('b.idBitacora','b.tituloBitacora', 'b.descripcionBitacora', 'b.fechaBitacora', 'p.nombrePersona', 'e.nombreEmergencia')
            ->where('b.tituloBitacora', 'LIKE', '%'.$query.'%')
            ->orderBy('idBitacora', 'desc')
            ->paginate(4);
            return view('bitacora.bitacora.index', ['bitacoras'=>$bitacoras, 'searchText'=>$query]);
        }
    }
    public function create(){
        $personas=DB::table('tbl_persona')->where('condicion', '=', '1')->get();
        $emergencias=DB::table('tbl_emergencia')->where('condicion', '=', '1')->get();
        return view('bitacora.bitacora.create', ['personas'=>$personas, 'emergencias'=>$emergencias]);
    }
    public function store(BitacoraFormRequest $request){
        $fechaActual=date('Y-m-d');
        $bitacora=new Bitacora();
        $bitacora->tituloBitacora=$request->get('tituloBitacora');
        $bitacora->descripcionBitacora=$request->get('descripcionBitacora');
        $bitacora->fechaBitacora=$fechaActual;
        $bitacora->idPersona=$request->get('idPersona');
        $bitacora->idEmergencia=$request->get('idEmergencia');
        $bitacora->save();
        return Redirect::to('bitacora/bitacora');
    }
    public function show($id){
        return view('bitacora.bitacora.show', ['bitacora'=>Bitacora::findOrFail($id)]);
    }
    public function edit($id){
        $bitacora=Bitacora::findOrFail($id);
        $personas=DB::table('tbl_persona')->where('condicion', '=', '1')->get();
        $emergencias=DB::table('tbl_emergencia')->where('condicion', '=', '1')->get();
        return view('bitacora.bitacora.edit', ['bitacora'=>$bitacora, 'personas'=>$personas, 'emergencias'=>$emergencias]);
    }
    public function update(BitacoraFormRequest $request, $id){
        $bitacora=Bitacora::findOrFail($id);
        $bitacora->tituloBitacora=$request->get('tituloBitacora');
        $bitacora->descripcionBitacora=$request->get('descripcionBitacora');
        $bitacora->idPersona=$request->get('idPersona');
        $bitacora->idEmergencia=$request->get('idEmergencia');
        $bitacora->update();
        return Redirect::to('bitacora/bitacora'); 
    }
}
