@extends('layouts.app')

@section('titulo')
    Incia Sesión en Desvtagram
@endsection

@section('contenido')
    
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-6/12 p-5">
        <img src="{{ asset('img/login.jpg') }}" alt="Imagen Crear cuenta">
    </div>

    <div class="md:w-4/12">
        
        <form  method="POST" action="{{ route('login.store') }}" class="bg-slate-100 shadow-3xl p-5 border rounded-xl" novalidate>
            @if (session('mensaje'))
                <p class="text-white bg-red-600 p-2 text-sm rounded-xl my-5"> Error credenciales </p>   
            @endif

            @csrf
            <div class="mb-5">
                <label for="email" class="text-gray-700 uppercase mb-3 block font-bold">
                    Email
                </label>
                <input id="email" type="email" name="email" placeholder="Ingresa tu email"
                class="rounded-xl p-3 border w-full @error('email')  border-red-600  @enderror"
                value="">
            </div>
            @error('email')
                <p class="text-white bg-red-600 p-2 text-sm rounded-xl my-5"> {{ $message }} </p>
            @enderror

            <div class="mb-5">
                <label for="password" class="text-gray-700 uppercase mb-3 block font-bold">
                    Contraseña
                </label>
                <input id="password" type="password" name="password" placeholder="password"
                class="rounded-xl p-3 border w-full @error('password')  border-red-600  @enderror"
                value="">
            </div>
            @error('password')
                <p class="text-white bg-red-600 p-2 text-sm rounded-xl my-5"> {{ $message }} </p>
            @enderror

            <div>
                <input type="checkbox" name="remember" id="">
                <label class="text-gray-700 text-sm">Mantener seción abierta</label>
            </div>

            <input type="submit" value="Inicia Sesión" class="p-3 rounded-xl uppercase text-bold w-full bg-slate-400 hover:bg-slate-700 transition-colors text-white">
        </form>
    </div>
</div>

@endsection