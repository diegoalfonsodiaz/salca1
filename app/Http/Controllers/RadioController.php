<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Radio;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RadioFormRequest;
use DB;
class RadioController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $query=trim($request->get('searchText'));
            $radios=DB::table('tbl_radio as r')
            ->join('tbl_persona as p', 'r.idPersona', '=', 'p.idPersona')
            ->select('r.idRadio', 'p.nombrePersona', 'r.descripcionRadio', 'r.claveRadio')
            ->where('p.nombrePersona', 'LIKE', '%'.$query.'%')
            ->where('r.estadoRadio','=','1')
            ->orderBy('idRadio', 'desc')
            ->paginate(4);
            return view('radio.radio.index', ['radios'=>$radios, 'searchText'=>$query]);
        }
    }
    public function create(){
        $personas=DB::table('tbl_persona')->where('condicion', '=', '1')->get();
        return view('radio.radio.create', ['personas'=>$personas]);
    }
    public function store(RadioFormRequest $request){
        $radio=new Radio();
        $radio->descripcionRadio=$request->get('descripcionRadio');
        $radio->claveRadio=$request->get('claveRadio');
        $radio->estadoRadio='1';
        $radio->idPersona=$request->get('idPersona');
        $radio->save();
        return Redirect::to('radio/radio');
    }
    public function show($id){
        return view('radio.radio.show', ['radio'=>Radio::findOrFail($id)]);
    }
    public function edit($id){
        $radio=Radio::findOrFail($id);
        $personas=DB::table('tbl_persona')->where('condicion', '=', '1')->get();
        return view('radio.radio.edit', ['radio'=>$radio, 'personas'=>$personas]);
    }
    public function update(RadioFormRequest $request, $id){
        $radio=Radio::findOrFail($id);
        $radio->descripcionRadio=$request->get('descripcionRadio');
        $radio->claveRadio=$request->get('claveRadio');
        $radio->idPersona=$request->get('idPersona');
        $radio->update();
        return Redirect::to('radio/radio'); 
    }
    public function destroy($id){
        $radio=Radio::findOrFail($id);
        $radio->estadoRadio='0';
        $radio->update();
        return Redirect::to('radio/radio'); 
    }
}
