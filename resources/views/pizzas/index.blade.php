@extends('layouts.app')

@section('content')
<div class="container pizzaOrder">
    <h1 class="text-center font-weight-lighter">Pizza Orders</h1>
    @foreach($pizzas as  $pizza)
    <div class="jumbotron py-3">
        <img src="/img/pizza.png" alt="pizza icon" class="d-inline">
        <h4 class="d-inline font-weight-normal"><a href="/pizzas/{{ $pizza->id }}" class="stretched-link text-decoration-none">{{ $pizza->name }}</a></h4>
    </div>
    @endforeach
</div>
@endsection