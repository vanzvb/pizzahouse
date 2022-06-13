@extends('layouts.app')

@section('Pizzas')
<div class="wrapper pizza-details">
    <h1>Order for {{ $testid->name }}</h1>
    <p class="type">Type - {{ $testid->type }}</p>
    <p class="base">Base - {{ $testid->base }}</p>
    <p class="toppings">Extra toppings:</p>
    <ul>

    @if ($testid->toppings == null)
    <li>No toppings</li>
    @else
        @foreach ($testid->toppings as $toppings)
        <li>{{ $toppings }}</li>
        @endforeach
    @endif
    </ul>

    <form action="{{ route('pizzas.destroy', $testid->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
    </form>

</div>
<a href="/pizzas" class="back">Pizza Menu</a>
@endsection