<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Animale;
use Illuminate\Support\Str;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index2()
    {
        return view('vista');
    }
    public function index()
    {
        $animales= Animale::toBase()->get();
        return view('index',compact('animales'));
        //return view('index');
    }
    public function crear(){
        return view('animales.crear');
        //return view('home');
        return view('vista');
    }
    public function guardar(Request $request){
        //intercepta el flujo insercion
        $request->validate([
            'especie' => 'required',
            'familia' => 'required',
            'nombre' => 'required',
            'genero' => 'required',
            'longevidad' => 'required',
            'longitud' => 'required',
            'peso' => 'required',
            'imagen' => 'required',
            'informacion' => 'required'
        ]);

        $newanimal = new Animale();

        $newanimal->especie = $request->especie;
        $newanimal->familia = $request->familia;
        $newanimal->nombre = $request->nombre;
        $newanimal->genero = $request->genero;
        $newanimal->longevidad = $request->longevidad;
        $newanimal->longitud = $request->longitud;
        $newanimal->peso = $request->peso; 
        $newanimal->informacion = $request->informacion;
        //script para subir la imagen
        if($request->hasFile("imagen")){
            $imagen= $request->file("imagen");
            $nombreimg = Str::slug ($request->nombre)."_".($request->especie).".".$imagen->guessExtension();
            $ruta= public_path("img/");
            //$imagen->move($ruta, $nombreimg);
            copy($imagen->getRealPath(),$ruta.$nombreimg);
            $newanimal->imagen = $nombreimg;    
        } 
        $newanimal->save();
        
        return redirect()-> route('animales.index');
    }
    
    public function ver(Animale $animal){
        //$felino = felino::find($especie);

        return view('animales.ver', compact('animal'));
    }

    public function editar(Animale $animal){

        return view('animales.editar',compact('animal'));
        //$felino = felino::find($felino);
        //return $felino;
    }

    public function actualizar(Request $request, Animale $animal){
        $animal->especie = $request->especie;
        $animal->familia = $request->familia;
        $animal->nombre = $request->nombre;
        $animal->genero = $request->genero;
        $animal->longevidad = $request->longevidad;
        $animal->longitud = $request->longitud;
        $animal->peso = $request->peso;
        $animal->informacion = $request->informacion;
        //script para subir la imagen
        if($request->hasFile("imagen")){
            $imagen= $request->file("imagen");
            $nombreimg = Str::slug ($request->nombre)."_".($request->especie).".".$imagen->guessExtension();
            $ruta= public_path("img/");
            //$imagen->move($ruta, $nombreimg);
            copy($imagen->getRealPath(),$ruta.$nombreimg);
            $animal->imagen = $nombreimg;    
        } 
        $animal->save();
        
        return redirect()->route('animales.ver', $animal);
        
    }

    public function eliminar(Animale $animal){
        $animal->delete();
        $this->mensaje('message',' Felino Eliminado Correctamente ');
        return redirect()->back();
    }
    public function mensaje(string $animal= null, string $mensaje = null)
    {
        return session()->flash($animal,$mensaje);
    }
}
