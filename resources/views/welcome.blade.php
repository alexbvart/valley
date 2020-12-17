@extends('layouts.app')

@section('content')

    <section class="text-gray-700 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 font-black libre">La forma más
                    cómoda de
                    <br class="hidden lg:inline-block">gestionar tu negocio
                </h1>
                <p class="mb-8 leading-relaxed libre">Vive la experiencia Valley, gestiona tu negocio desde tu celular en
                    todo momento.</p>
                <div class="flex justify-center">
                    <button
                        class="inline-flex text-white bg-green-dark border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Button</button>
                    <button
                        class="ml-4 inline-flex text-gray-900 bg-green-light border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded text-lg">Button</button>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="{{ asset('images/muñecoDeNieve.png') }}">
            </div>
        </div>
    </section>
@endsection
