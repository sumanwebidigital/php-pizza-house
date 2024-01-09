@extends('layouts.app')

@section('content')
<div class = "container">
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
        <p></p>
        <div class = "order-actions">
            <form action = "{{ route('pizzas.destroy', $pizza->id) }}" method = "POST">
                @csrf
                @method('DELETE')
                <button class="submit-button" type = "submit">Complete Order</button>
            </form>
        </div>
    </div>
    <p></p>
    <p></p>
    <p></p>
    <a href="{{ route('pizzas.index') }}" class="back"><- Back to all pizzas</a>
</div>
@endsection
