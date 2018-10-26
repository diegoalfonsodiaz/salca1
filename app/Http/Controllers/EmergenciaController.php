<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Emergencia;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EmergenciaFormRequest;
use DB;
class EmergenciaController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $query=trim($request->get('searchText'));
            $emergencias=DB::table('tbl_emergencia')->where('nombreEmergencia', 'LIKE', '%'.$query.'%')
            ->where('condicion','=','1')
            ->orderBy('idEmergencia', 'desc')
            ->paginate(4);
            return view('emergencia.emergencia.index', ['emergencias'=>$emergencias, 'searchText'=>$query]);
        }
    }
    public function create(){
        return view('emergencia.emergencia.create');
    }
    public function store(EmergenciaFormRequest $request){
        $emergencia=new Emergencia();
        $emergencia->nombreEmergencia=$request->get('nombreEmergencia');
        $emergencia->descripcionEmergencia=$request->get('descripcionEmergencia');
        $emergencia->condicion='1';
        $emergencia->save();
        return Redirect::to('emergencia/emergencia');
    }
    public function show($id){
        return view('emergencia.emergencia.show', ['emergencia'=>Emergencia::findOrFail($id)]);
    }
    public function edit($id){
        return view('emergencia.emergencia.edit', ['emergencia'=>Emergencia::findOrFail($id)]);
    }
    public function update(EmergenciaFormRequest $request, $id){
        $emergencia=Emergencia::findOrFail($id);
        $emergencia->nombreEmergencia=$request->get('nombreEmergencia');
        $emergencia->descripcionEmergencia=$request->get('descripcionEmergencia');
        $emergencia->update();
        return Redirect::to('emergencia/emergencia'); 
    }
    public function destroy($id){
        $emergencia=Emergencia::findOrFail($id);
        $emergencia->condicion='0';
        $emergencia->update();
        return Redirect::to('emergencia/emergencia'); 
    }
}
