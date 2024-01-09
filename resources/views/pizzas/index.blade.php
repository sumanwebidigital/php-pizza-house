@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="title m-b-md">
        Pizzas Order Lists
    </div>

    @foreach ($pizzas as $pizza)
    <a   class = "pizza-row" href = "{{route('pizzas.show', $pizza->id)}}">
        <div class = "pizza-row">
            <div class = "pizza-details">
                    <table>
                        <tr>
                            <td class = "pizza-row-name">Order For: </td>
                            <td class="pizza-row-name-value">&nbsp; {{$pizza->name}}</td>
                        </tr>
                    </table>
                    &nbsp; 
                    <table>
                        <tr>
                            <td class = "pizza-row-type">Type: </td>
                            <td class="pizza-row-type-value">&nbsp; {{$pizza->type}}</td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td class = "pizza-row-base">Base: </td>
                            <td class="pizza-row-base-value">&nbsp; {{$pizza->base}}</td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td class = "pizza-row-toppings">Toppings: </td>
                            <td>&nbsp; &nbsp; &nbsp;</td>
                            <td class = "pizza-row-toppings-value">
                                @foreach ($pizza->toppings as $toppings)
                                    <li>
                                        {{$toppings}}
                                    </li>
                                @endforeach
                            </td>
                        </tr>
                    </table>
                    
            </div>
        </div>
    </a>

    <hr>
   
    @endforeach
</div>
@endsection
