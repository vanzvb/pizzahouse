@extends('layouts.app')

@section('Pizzas')
<div class="content">
    <input type="text" placeholder="Search...">
    <input type="date">
</div>
<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>
    
    @foreach ($pizzas as $pizza)
    <div class="pizza-item">
        <img src="/img/PizzaIcon.png" alt="icon">
        <h4><a href="/pizzas/{{ $pizza->id }}"> {{ $pizza->name }} </a></h4>
        <br>
    </div>
    @endforeach

</div>



@endsection
                {{-- 
                @unless 'if condition is false'  

              
                <p>{{ $type }} - {{ $base }} - {{ $price=$price+6 }} </p>

                @if(@$price > 15)
                    <p>price is expensive.</p>
                @else
                    <p>price is normal</p>
                @endif

                @php
                    $name = 'Vanz';
                    echo $name;
                @endphp 
                --}}