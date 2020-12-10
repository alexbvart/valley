@extends('layouts.app')

@section('content')

    <div class="card-header">{{ __('Register') }}</div>

    <div class="grid min-h-screen place-items-center">
        <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">

            <h1 class="text-xl font-semibold">Hola 👋, <span class="font-normal">por favor, rellene con tu información para
                    registrarte en
                    <span class="text-xl font-semibold color-green-dark"> valley</span>.
                </span></h1>


            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <label 
                        for="name" 
                        class="block  font-normal text-gray-600"
                        
                    >
                    {{ __('Name') }}</label>


                        <input 
                            id="name" 
                            type="text" 
                            class="form-control @error('name') is-invalid @enderror
                                block w-full p-3 mt-2 text-gray-600 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                            name="name"
                            placeholder="Alexander Briones"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div>

                <div class="form-group row">            
                    <label for="email"   class="block  font-normal text-gray-600">
                        {{ __('E-Mail Address') }}
                    </label>

                    <div class="">
                        <input 
                        id="email" 
                        type="email" 
                        class="form-control @error('email') is-invalid @enderror+
                            block w-full p-3 mt-2 text-gray-600 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                        name="email" 
                        value="{{ old('email') }}" 
                        placeholder="alexbriones@valley.com"
                        required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="block  font-normal text-gray-600">
                        {{ __('Password') }}
                    </label>

                    <input 
                        id="password" 
                        type="password" 
                        class="form-control @error('password') is-invalid @enderror
                            block w-full p-3 mt-2 text-gray-600 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                        name="password" 
                        placeholder="********"
                        required autocomplete="new-password"
                    >
                    @error('password')
                        <span class="invalid-feedback color-action " role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
 
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="block  font-normal text-gray-600"> 
                        {{ __('Confirm Password') }}
                    </label>
                    <input 
                        id="password-confirm" 
                        type="password" 
                        class="form-control 
                                block w-full p-3 mt-2 text-gray-600 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" 
                        name="password_confirmation" required
                        autocomplete="new-password"
                        placeholder="********"
                    >
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit"
                            class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>

            </form>


        </div>
    </div>
@endsection

