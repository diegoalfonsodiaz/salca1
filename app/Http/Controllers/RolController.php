<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Rol;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RolFormRequest;
use DB;
class RolController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $query=trim($request->get('searchText'));
            $roles=DB::table('tbl_rol')->where('nombreRol', 'LIKE', '%'.$query.'%')
            ->where('estadoRol','=','1')
            ->orderBy('idRol', 'desc')
            ->paginate(4);
            return view('usuario.rol.index', ['roles'=>$roles, 'searchText'=>$query]);
        }
    }
}
