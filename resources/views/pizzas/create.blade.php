@extends('layouts.app')

@section('content')

<div class = "container">
    <div class = "wrapper crate-pizza">
        <div class = "title m-b-md">
            Create a New Pizza
        </div>
        <p></p>
        <form action = "{{ route('pizzas.index') }}" method = "POST">
            @csrf
            <p>
                <label for = "name"><b>Your name:</b></label>
                &nbsp;
                <input type = "text" id = "name" name = "name"/>
            </p>
            <p>
                <label  for   = "type"><b>Choose pizza type:</b></label>
                &nbsp;
                <select name  = "type" id = "type">
                    <option value = "margarita">Margarita</option>
                    <option value = "hawaiian">Hawaiian</option>
                    <option value = "veg supreme">Veg Supreme</option>
                    <option value = "volcano">Volcano</option>
                </select>
            </p>
            
            <p>
                <label for = "base"><b>Choose base type:</b></label>
                &nbsp;
                <select name  = "base" id = "base">
                    <option value = "cheesy crust">Cheesy Crust</option>
                    <option value = "garlic crust">Garlic Crust</option>
                    <option value = "thin & crispy">Thin & Crispy</option>
                    <option value = "thick">Thick</option>
                </select>
            </p>
            
            <p>
                <fieldset>
                    <label><b>Extra toppings:</b></label>
                    &nbsp;
                    <input type = "checkbox" name = "toppings[]" value = "mushrooms">Mushrooms</input>
                    &nbsp;
                    <input type = "checkbox" name = "toppings[]" value = "peppers">Peppers</input>
                    &nbsp;
                    <input type = "checkbox" name = "toppings[]" value = "garlic">Garlic</input>
                    &nbsp;
                    <input type = "checkbox" name = "toppings[]" value = "olives">Olives</input>
                </fieldset>
            </p>
            <input class="submit-button" type = "submit" value = "Order Pizza"/>
        </form>

    </div>
</div>


@endsection