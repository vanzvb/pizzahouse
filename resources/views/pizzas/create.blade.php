@extends('layouts.app')

@section('Pizzas')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>

    <form action="/pizzas" method="POST">
        @csrf
        <label form="name">Name : </label>
        <input type="text" id="name" name="name">

        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="hawaiian">hawaiian</option>
            <option value="mozerela">mozerela</option>
            <option value="volcano">volcano</option>
            <option value="veg supreme">veg supreme</option>
        </select>

        <label for="base">Choose pizza type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">cheesy crust</option>
            <option value="garlic crust">garlic crust</option>
            <option value="thin & crispy">thin & crispy</option>
            <option value="plain">plain</option>
        </select>
        
        <fieldset>
            <label>Extra Toppings :</label>
            <input type="checkbox" name="toppings[]" value="mushroom">Mushroom<br />
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
            <input type="checkbox" name="toppings[]" value="galic">Garlic<br />
            <input type="checkbox" name="toppings[]" value="chocolate">Chocolate<br />
        </fieldset>

        <input type="submit" value="Order Pizza">

    </form>

</div>
@endsection