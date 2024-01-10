<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaApiController extends Controller
{
    public function getPizzas(){
        return Pizza::all();

    }

    public function getPizzaById($id){
        return Pizza::findOrFail($id);
    }

    public function insert(Request $request){
        $pizza           = new Pizza();
        $pizza->name     = $request->name;
        $pizza->type     = $request->type;
        $pizza->base     = $request->base;
        $pizza->toppings = $request->toppings;
        
        $result = $pizza->save();
        if ($result){
            return [
                "result" => "Sucessfully saved."
            ];
        }

        return [
            "result" => "Oops! Failed to save."
        ];
    }
}
