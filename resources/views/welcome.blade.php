@extends('layouts.layout')

@section('content')
<div class="home">
    @if (Route::has('login'))
        <div class="container text-right mt-3">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="nav-link d-inline text-uppercase text-dark">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="nav-link d-inline text-uppercase text-dark">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="/img/pizza-house.png" alt="pizza house logo">
        <div class="title m-b-md text-primary">
            <u>The North's Best Pizzas</u>
        </div>
        <p class="text-center">{{ session('msg') }}</p>
        <a href="pizzas/create" class="btn btn-dark">Order Pizza</a>
    </div>
</div>
@endsection