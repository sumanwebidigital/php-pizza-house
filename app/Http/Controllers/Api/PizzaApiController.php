<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pizza;
use Exception;

class PizzaApiController extends Controller
{
    public function getPizzas(){
        return Pizza::all();

    }

    public function getPizzaById($id){
        return Pizza::findOrFail($id);
    }

    public function search($name){
        $pizzas = Pizza::where('name', 'like', "%".$name."%")->get();
        return [
            "return" => $pizzas
        ];
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

    public function update(Request $request){
        $pizza           = Pizza::find($request->id);
        $pizza->name     = $request->name;
        $pizza->type     = $request->type;
        $pizza->base     = $request->base;
        $pizza->toppings = $request->toppings;
        
        $result = $pizza->save();
        if ($result) {
            return [
                "result" => "Successfully updated."
            ];
        }
        
        return [
            "result" => "Oops! Failed to update."
        ];
    }

    public function delete($id){
        $success = false;
        try{
            $pizza = Pizza::find($id);

            if ($pizza != null){
                $result = $pizza->delete();
                if ($result) {
                    $success = true;
                }
            }
        }catch(Exception $e){
            $success = false;
        }
        
        if($success){
            return [
                "result" => 'Successfully deleted'
            ]; 
        }else{
            return [
                "result" => 'Oops! Failed to deleted. Could not find the id '.$id
            ];
        }
    }
}
