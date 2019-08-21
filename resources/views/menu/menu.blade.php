@extends('layouts/app')

@section('menu')
<div id="app" class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
        <a class="" href="{{ url('/personal') }}">
                <img src="{{ asset('images/siemens-logo.png') }}" width="140px" alt="">
                </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!--<li class="nav-item active">
                    <a class="nav-link" href="#">Menu Adicional<span class="sr-only">(current)</span></a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="" data-toggle="" aria-haspopup="" aria-expanded="">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li> -->
            </ul>
            <!-- Authentication Links -->
            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
            @endguest            
            <div class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto pull-left">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-style: solid; border-color: hsla(89, 13%, 10%, 0.1);">
                            <i class="fas fa-align-justify"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Cerrar Sesión                         
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                             </form>
                        </div>
                    </li>
                    <li class="nav-item active nav-link">
                        <strong>Bienvenido:</strong>  {{ Auth::user()->name}} {{Auth::user()->apellidos}}  
                    </li>
                </ul>
            </div>
        </div>
        </nav>
        <!-- <main class="py-4">
            @yield('content')
        </main> -->
        @include('slide')
    </div>

    
@endsection    