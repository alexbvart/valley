@extends('layouts.app')

@section('content')

<div class="container mx-auto">

{{--             <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}

            <header class="flex items-center justify-between px-5 pt-8">
              <h2 class="text-lg leading-6 font-medium text-black">Prductos</h2>
              <button class="hover:bg-green-200 hover:text-green-800 
                            group flex items-center rounded-md bg-green-100 text-light-green-600 text-sm font-medium px-4 py-2">
    
                <svg class="group-hover:text-green-600 text-green-500 mr-2" width="12" height="20" fill="currentColor">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M6 5a1 1 0 011 1v3h3a1 1 0 110 2H7v3a1 1 0 11-2 0v-3H2a1 1 0 110-2h3V6a1 1 0 011-1z"/>
                </svg>
                    Nuevo
              </button>
            </header>



            <section class="text-gray-700 body-font">
                <div class="container px-5 py-12 mx-auto">
                  <div class="flex flex-wrap -m-4">


                    {{-- aqui empieza --}}

                    <div class="lg:w-1/4 md:w-1/3 w-1/2 p-4 ">
                      <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" 
                        src="{{ asset('images/productos/tomate.png') }}">
                      </a>
                      <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">FRUTA </h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Tomate</h2>
                        <p class="mt-1">$3.00</p>
                      </div>
                    </div>

                    {{-- ------------------- --}}

                    <div class="lg:w-1/4 md:w-1/3 w-1/2 p-4 ">
                      <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" 
                        src="{{ asset('images/productos/manzana.png') }}">
                      </a>
                      <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">FRUTA</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Manzana</h2>
                        <p class="mt-1">S/.2.00</p>
                      </div>
                    </div>
                    
                    {{-- ------------------- --}}

                    <div class="lg:w-1/4 md:w-1/3 w-1/2 p-4 ">
                      <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" 
                        src="{{ asset('images/productos/banana.png') }}">
                      </a>
                      <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">FRUTA</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Platano</h2>
                        <p class="mt-1">$3.00</p>
                      </div>
                    </div>
                    
                    {{-- ------------------- --}}

                    <div class="lg:w-1/4 md:w-1/3 w-1/2 p-4 ">
                      <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" 
                        src="{{ asset('images/productos/naranja.png') }}">
                      </a>
                      <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">FRUTA</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Naranja</h2>
                        <p class="mt-1">$4.00</p>
                      </div>
                    </div>
                    
                    {{-- ------------------- --}}

                    <div class="lg:w-1/4 md:w-1/3 w-1/2 p-4 ">
                      <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" 
                        src="{{ asset('images/productos/durazno.png') }}">
                      </a>
                      <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">FRUTA</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Durazno</h2>
                        <p class="mt-1">$4.00</p>
                      </div>
                    </div>
                    
                    {{-- ------------------- --}}

                    <div class="lg:w-1/4 md:w-1/3 w-1/2 p-4 ">
                      <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" 
                        src="{{ asset('images/productos/piña.png') }}">
                      </a>
                      <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">FRUTA</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Piña</h2>
                        <p class="mt-1">$4.00</p>
                      </div>
                    </div>
                    
                    {{-- ------------------- --}}

                    <div class="lg:w-1/4 md:w-1/3 w-1/2 p-4 ">
                      <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" 
                        src="{{ asset('images/productos/palta.png') }}">
                      </a>
                      <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">VEGETAL</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Palta</h2>
                        <p class="mt-1">$4.00</p>
                      </div>
                    </div>
                    
                    {{-- ------------------- --}}

                    <div class="lg:w-1/4 md:w-1/3 w-1/2 p-4 ">
                      <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" 
                        src="{{ asset('images/productos/arandano.png') }}">
                      </a>
                      <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">FRUTA</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Arandano</h2>
                        <p class="mt-1">$8.00</p>
                      </div>
                    </div>
                    
                    {{-- ------------------- --}}

                  
                   {{-- acaba --}}
                  </div>
                </div>
              </section>
</div>
@endsection
