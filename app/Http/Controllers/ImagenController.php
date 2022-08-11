<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ImagenController extends Controller
{
    public function store(Request $request) 
    {
        $imagen = $request->file('imagen');  // Parametro nombre del archivo ('file')

        // Generamos nombre de imagen unicos
        $nombreImagen = Str::uuid() . '.' . $imagen->extension();

        // Agregamos imagen
        $imagenServido = Image::make($imagen);

        // Especificamos alto y ancho
        $imagenServido->fit(1000, 1000);

        // Añadimos a la carpeta uploads con el nombre de la imagen
        $imagenPath = public_path('uploads/' . $nombreImagen);

        // Guardomos imagen en el servidor
        // Lo que se almacena es el nombre con id unico no se guarda la imagen 
        $imagenServido->save($imagenPath);

        return response()->json(['image' => $nombreImagen]);
    }
}