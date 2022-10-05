<?php namespace App\Http\Controllers\Pub;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\RegistrosCoche;

class IndexController extends Controller {
    //
    
    public function index(){
        
        
        return view('public.form');
    }
    
    
    public function memory(){
        return view('public.memory');
    }
    
    
    
    public function verRegistros(){
        $registros = RegistrosCoche::get();
        return $registros;
    }
    
    
    
    public function postform(Request $request){
        $registro = new RegistrosCoche();
        $registro->nombre = $request->nom;
        $registro->apellidos = $request->cognoms;
        $registro->email = $request->email;
        $registro->dni = $request->dni;
        $registro->telefon = $request->telefon;
        $registro->publicacio_dades = $request->has('acepto2')?true:false;
        $registro->q1 = $request->q1;
        $registro->q2 = $request->q2;
        $registro->q3 = $request->q3;
        $registro->q4 = $request->q4;
        $registro->q5 = $request->q5;
        $registro->save();
        return $registro;
    }
}