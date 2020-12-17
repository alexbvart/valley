@extends('layouts.app')

@section('content')


    <div class="grid min-h-screen place-items-center">
        <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">

            <h1 class="text-xl font-semibold">Hola 👋, <span class="font-normal">por favor, rellene con tu información para
                    ingresar a
                    <span class="text-xl font-semibold color-green-dark"> valley</span>.
                </span></h1>

            <div class="card-header">{{ __('Login') }}</div>

            <form method="POST" action="{{ route('login') }}" class="mt-6">
                @csrf

                <div class="">
                    <label for="email" class="block  font-normal text-gray-600">{{ __('E-Mail Address') }}</label>

                    <div class="">
                        <input id="email" type="email" placeholder="alexbriones@valley.com"
                            class="form-control @error('email') is-invalid @enderror 
                                        block w-full p-3 mt-2 text-gray-600 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="">

                    <label for="password" class="block  font-normal text-gray-600">{{ __('Password') }}</label>
                    <div class="">
                        <input id="password" type="password" placeholder="********"
                            class="form-control @error('password') is-invalid @enderror
                                    block w-full p-3 mt-2 text-gray-600 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" name="password"
                            required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class=" ">
                    <div class="">

                        <button type="submit"
                            class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                            {{ __('Login') }}
                        </button>


                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }} 😱
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
