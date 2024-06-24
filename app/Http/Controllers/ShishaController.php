<?php

namespace App\Http\Controllers;
use App\Models\Bag;
use Illuminate\Http\Request;

class ShishaController extends Controller
{

    //returnez toate gentile
    public function index()
    {
        return response()->json(Bag::all());
    }

    //adaug o geanta noua
    public function store(Request $request)
    {
        $bag = Bag::create($request->all());
        return response()->json($bag);
    }


    //Bag::findOrFail($id) - metoda eloquent care incearca sa gaseasca o geanta dupa id
    //daca gaseste, atribuie inegistrarea var $bag; daca nu, arunca o exceptie model not found exception
    public function show($id)
    {
        $bag = Bag::findOrFail($id);
        return response()->json($bag);
    }

    public function update(Request $request, $id)
    {
        $bag = Bag::findOrFail($id);
        $bag->update($request->all());
        return response()->json($bag);
    }

    public function destroy($id)
    {
        $bag = Bag::findOrFail($id);
        $bag->delete();
        return response()->json(null);
    }
}
