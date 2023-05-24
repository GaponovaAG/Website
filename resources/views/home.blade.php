

@extends('layouts.app')

@section('content')
<div class="div2_lk">
    <div class="head2">
                Вы в личном кабинете
    </div>
    

<div class="head2">       
    <ul class="navbar-nav ml-auto">
    
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('') }}</a>
                </li>
            @endif
        @else
        
                

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="a_b" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Выйти') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            
        @endguest
    </ul>
    </div>    
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     <p>Вы зашли под учеткой </p>{{Auth::user()->name}}<br>{{Auth::user()->email}}
                </div>
                
        </div>
    </div>
</div>
<div class="none"></div>


@endsection
