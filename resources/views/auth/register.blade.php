@extends('layouts.app')

@section('titulo')
    Registrate en Desvtagram
@endsection

@section('contenido')
    
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-6/12 p-5">
        <img src="{{ asset('img/login.jpg') }}" alt="Imagen Crear cuenta">
    </div>

    <div class="md:w-4/12">
        <form action={{ route('register.store') }} method="POST" class="bg-slate-100 shadow-3xl p-5 border rounded-xl" novalidate>
            @csrf
            <div class="mb-5">
                <label for="name" class="text-gray-700 uppercase mb-3 block font-bold">
                    Nombre
                </label>
                <input id="name" type="text" name="name" placeholder="Ingresa tu nombre"
                class="rounded-xl p-3 border w-full  @error('name')  border-red-600  @enderror" 
                value="{{ old('name') }}">
            </div>
            @error('name')
                <p class="text-white bg-red-600 p-2 text-sm rounded-xl my-5"> {{ $message }} </p>
            @enderror

            <div class="mb-5">
                <label for="username" class="text-gray-700 uppercase mb-3 block font-bold">
                    Nombre usuario
                </label>
                <input id="username" type="text" name="username" placeholder="Nombre de usuario"
                class="rounded-xl p-3 border w-full @error('username')  border-red-600  @enderror" 
                value="{{ old('username') }}">
            </div>
            @error('username')
                <p class="text-white bg-red-600 p-2 text-sm rounded-xl my-5"> {{ $message }} </p>
            @enderror

            <div class="mb-5">
                <label for="email" class="text-gray-700 uppercase mb-3 block font-bold">
                    Email
                </label>
                <input id="email" type="email" name="email" placeholder="Ingresa tu email"
                class="rounded-xl p-3 border w-full @error('email')  border-red-600  @enderror" 
                value="{{ old('email') }}">
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
                value="{{ old('password') }}">
            </div>
            @error('password')
                <p class="text-white bg-red-600 p-2 text-sm rounded-xl my-5"> {{ $message }} </p>
            @enderror

            <div class="mb-5">
                <label for="password_confirmation" class="text-gray-700 uppercase mb-3 block font-bold">
                    Repetir contraseña
                </label>
                <input id="password_confirmation" type="password" name="password_confirmation" placeholder="repeat password"   {{-- id=password_confirmation nos da la ventaja de usar funcionalidades de laravel lo verifica --}}
                class="rounded-xl p-3 border w-full @error('password_confirmation')  border-red-600  @enderror" 
                value="{{ old('password_confirmation') }}">
            </div>
            @error('password_confirmation')
                <p class="text-white bg-red-600 p-2 text-sm rounded-xl my-5"> {{ $message }} </p>
            @enderror

            <input type="submit" value="Crear cuenta" class="p-3 rounded-xl uppercase text-bold w-full bg-slate-400 hover:bg-slate-700 transition-colors text-white">
        </form>
    </div>
</div>

@endsection