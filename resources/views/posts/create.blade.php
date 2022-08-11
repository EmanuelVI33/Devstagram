@extends('layouts.app')

@section('titulo')
    Crear publicación
@endsection

@section('contenido')
    <form action={{ route('posts.store') }} method="POST" novalidate enctype="multipart/form-data">
    @csrf
    <div class="md:flex md:justify-center md:gap-10 md:items-center px-2">
        {{-- Subir imagen --}}
        <div class="md:w-1/2 px-10">
            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">
                    Subir Imagen
                </label>
                <div class='flex items-center justify-center w-full'>
                    <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                        <div class='flex flex-col items-center justify-center pt-7'>
                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <p class='text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Seleccione la imagen</p>
                        </div>
                        <input name="imagen" id="imagen" type='file' class="hidden" />
                    </label>
                </div>
            </div>
        </div>

        <div class="md:w-1/2 bg-white p-10 rounded-lg shadow-xl">
            <div class="mb-5">
                <label for="titulo" class="text-gray-700 uppercase mb-3 block font-bold">
                    Título
                </label>

                <input id="titulo" type="text" name="titulo" placeholder="Titulo de la Publicación"
                    class="rounded-xl p-3 border w-full  @error('name')  border-red-600  @enderror" 
                    value="{{ old('titulo') }}">
                    
                    @error('titulo')
                        <p class="text-white bg-red-600 p-2 text-sm rounded-xl my-5"> {{ $message }} </p>
                    @enderror
            </div>

            <div class="mb-5">
                <label for="descripcion" class="text-gray-700 uppercase mb-3 block font-bold">
                    Descripción
                </label>

                <textarea 
                    id="descripcion" name="descripcion" placeholder="Descripcion de la publicacion"
                    class="rounded-xl p-3 border w-full  @error('descripcion')  border-red-600  @enderror"
                    >
                    {{ old('descripcion') }}
                </textarea>
                @error('descripcion')
                    <p class="text-white bg-red-600 p-2 text-sm rounded-xl my-5"> {{ $message }} </p>
                @enderror
            </div>
            <input type="submit" value="Crear Publicación" class="p-3 rounded-xl uppercase text-bold w-full bg-slate-400 hover:bg-slate-700 transition-colors text-white">
        </div>
    </div>
    </form>

    <!-- Script para ver la imagen antes de CREAR UN NUEVO PRODUCTO -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 

    <script>
        $(document).ready(function (e) {   
        $('#imagen').change(function(){            
            let reader = new FileReader();
            reader.onload = (e) => { 
                $('#imagenSeleccionada').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
        });
    });
    </script>

@endsection

