<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UserFormRequest;
use DB;
class UserController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $query=trim($request->get('searchText'));
            $usuarios=DB::table('user as u')
            ->join('tbl_persona as p', 'u.idPersona', '=', 'p.idPersona')
            ->join('tbl_rol as r', 'u.idRol', '=', 'r.idRol')
            ->select('u.id', 'u.usuario','p.nombrePersona', 'r.nombreRol')
            ->where('p.nombrePersona', 'LIKE', '%'.$query.'%')
            ->where('u.condicion', '=', '1')
            ->orderBy('p.idPersona', 'desc')
            ->paginate(4);
            return view('usuario.usuario.index', ['usuarios'=>$usuarios, 'searchText'=>$query]);
        }
    }
    public function create(){
        $personas=DB::table('tbl_persona')->where('condicion', '=', '1')->get();
        $roles=DB::table('tbl_rol')->where('estadoRol', '=', '1')->get();
        return view('usuario.usuario.create', ['personas'=>$personas, 'roles'=>$roles]);
    }
    public function store(UserFormRequest $request){
        $usuario=new User();
        $usuario->idPersona=$request->get('idPersona');
        $usuario->idRol=$request->get('idRol');
        $usuario->usuario=$request->get('usuario');
        $usuario->password=bcrypt($request->get('password'));
        $usuario->condicion='1';
        $usuario->save();
        return Redirect::to('usuario/usuario');
    }
    public function show($id){
        return view('usuario.usuario.show', ['usuario'=>User::findOrFail($id)]);
    }
    public function edit($id){
        $usuario=User::findOrFail($id);
        $personas=DB::table('tbl_persona')->where('condicion', '=', '1')->get();
        $roles=DB::table('tbl_rol')->where('estadoRol', '=', '1')->get();
        return view('usuario.usuario.edit', ['usuario'=>$usuario, 'personas'=>$personas, 'roles'=>$roles]);
    }
    public function update(UserFormRequest $request, $id){
        $usuario=User::findOrFail($id);
        $usuario->idPersona=$request->get('idPersona');
        $usuario->idRol=$request->get('idRol');
        $usuario->usuario=$request->get('usuario');
        $usuario->password=$request->get('password');
        $usuario->update();
        return Redirect::to('usuario/usuario'); 
    }
    public function destroy($id){
        $usuario=User::findOrFail($id);
        $usuario->condicion='0';
        $usuario->update();
        return Redirect::to('usuario/usuario'); 
    }
}
