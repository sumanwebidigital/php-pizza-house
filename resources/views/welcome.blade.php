@extends('layouts.app')

@section('content')
<div class="container" >
    <img src="/img/pizza-house.png" alt="pizza house logo"/>
    <div class="title m-b-md">
        The North's Best Pizzas
    </div>

    <p class = 'mssg'> {{session('messg')}} </p>

    <p></p>
    <p></p>
    <a href="{{ route('pizzas.create') }}">Order a Pizza</a>
</div>
@endsection