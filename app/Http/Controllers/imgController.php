<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Intervention\Image\Facades\Image;

class imgController extends Controller
{
    public function store(Request $request)
    {
        //llamamos el request y convertimos el arreglo a un archivo .json
        //$input = $request->all();
        //return response()->json($input);
        //seleccionamos el archivo y creamos un arreglo
        $imagen = $request->file('file');


        //generamos un id único para cada imagen usando el identificador único uuid implementado
        //por dropzone
        //recuerde importar el Illuminate Str
        $nombreImagen = Str::uuid() . "." . $imagen->extension();


        //llamo la clase que utiliza interventionimage para iniciar el procesamiento de la imagen
        $imagenServidor = Image::make($imagen);
        //cortamos la imagen
        $imagenServidor->fit(800, 800);

        //debemos mover las imagenes dentro del servidor porque despues de unos minutos el servidor por
        //defecto la elimina
        $imagenPath = public_path('uploads') . '/' . $nombreImagen;
        $imagenServidor->save($imagenPath);


        return response()->json(['imagen' => $nombreImagen]);
    }
}
