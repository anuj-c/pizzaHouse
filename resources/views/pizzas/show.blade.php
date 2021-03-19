@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>Order for <span class="text-uppercase">{{ $pizza->name }}</span></h1>
        <p>{{ $pizza->type }}</p>
        <p>{{ $pizza->base }}</p>
        <div>
            <p>Extra Toppings</p>
            <ul>
                @foreach($pizza->toppings as $topping)
                <li>{{ $topping }}</li>
                @endforeach
            </ul>
        </div>
        <form action="/pizzas/{{ $pizza->id }}" method="POST">
            @csrf
            @method("DELETE")
            <button class="btn btn-warning">Complete Order</button>
        </form>
    </div>
    <a href="/pizzas" class="nav-link">Back to all pizzas</a>
</div>
@endsection