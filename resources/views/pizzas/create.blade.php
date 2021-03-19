@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/pizzas" method="POST" class="jumbotron">
    @csrf   <!-- built in laravel thing, this is to pass it -->
        <div class="from-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <br>
        <div class="from-group">
            <label for="type">Choose pizza type:</label>
            <select name="type" id="type" class="form-control">
                <option value="margherita">Margherita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>
        </div>
        <br>
        <div class="from-group">
            <label for="base">Choose pizza type:</label>
            <select name="base" id="base" class="form-control">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin & crispy">Thin & Crispy</option>
                <option value="thick">Thick</option>
            </select>
        </div>
        <br>
        <div class="from-group">
            <label for="toppings">Extra Toppings:</label>
            <div class="form-check">
                <input type="checkbox" name="toppings[]" value="mushroom">Mushroom<br/>
                <input type="checkbox" name="toppings[]" value="peppers">Peppers<br/>
                <input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
                <input type="checkbox" name="toppings[]" value="olives">Olives<br/>
            </div>
        </div>
        <br>
        <div class="text-center">
            <input type="submit" value="Order Pizza" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection