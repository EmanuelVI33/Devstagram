@extends('layouts.app')

@section('titulo')
    Perfil: {{ $user->username }}
@endsection

@section('contenido')

    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 inline flex flex-col items-center md:flex-row">
            <div class="w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('img/usuario.svg') }}" alt="imagen de usario">
            </div>

            <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:items-start">
                <p class="text-2xl text-gray-600 font-bold py-5">
                    {{ $user->username }}
                </p> 

                <p class="text-lg text-gray-600 font-bold">
                    0
                    <span> Seguidores</span>    
                </p> 

                <p class="text-lg text-gray-600 font-bold">
                    0
                    <span> Siguiendo</span>
                </p> 

                <p class="text-lg text-gray-600 font-bold">
                    0
                    <span> Post</span>      
                </p> 
            </div>
        </div>
    </div>

@endsection