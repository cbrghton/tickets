<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Http\Requests\SistemaRequest;
use App\Sistema;
use Illuminate\Support\Facades\Redirect;
use DB;

class SistemaController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(Request $request)
    {
        if ($request) {
            $cat_sistema = DB::table('cat_sistema')
                ->orderBy('clave_sistema', 'asc')
                ->paginate(7);
            return view('informacion.sistema.index', ["cat_sistema" => $cat_sistema]);
        }
    }


    public function store(SistemaRequest $request)
    {
        $cat_sistema=new Sistema;
        $cat_sistema->clave_sistema=$request->get('clave_sistema');
        $cat_sistema->sistema=$request->get('sistema');
        $cat_sistema->estatus="ALTA";
        $cat_sistema->save();
        return Redirect::to('informacion/sistema');
    }

    public function update(SistemaRequest $request, $id)
    {
        $cat_sistema=Sistema::findOrFail($id);

        $cat_sistema->sistema=$request->get('sistema');
        $cat_sistema->clave_sistema=$request->get('clave_sistema');
        $cat_sistema->estatus="ALTA";

        $cat_sistema->update();
        return Redirect::to('informacion/sistema');
    }

    public function destroy($id)
    {
        $cat_sistema=Sistema::findOrFail($id);

        if($cat_sistema->estatus=="INACTIVO"){
            $cat_sistema->estatus="ACTIVO";
        }else{
            $cat_sistema->estatus="INACTIVO";
        }
        $cat_sistema->save();
        return Redirect::to('informacion/sistema');
    }

}
