<?php

namespace App\Http\Controllers;

use App\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    //mostare tutte le entità
    public function index(){
        $drinks = Drink::all();
        return view ('pages.drinks', compact('drinks'));
    }

    //mostrare un'entità
    public function show($id){
        $drink = Drink::findOrFail($id);
        return view ('pages.drinks-show', compact('drink'));
    }

    //creare una nuova entità
    public function create(){
        return view ('pages.drinks-create');
    }
    public function store(Request $request){
        Drink::create($request -> all());
        return redirect() -> route('home-drinks');
    }

    //modificare un'entità
    public function edit($id){
        $drink = Drink::findOrFail($id);
        return view ('pages.drinks-edit', compact('drink'));
    }
    public function update(Request $request, $id){
        $drink = Drink::findOrFail($id);
        $drink -> update($request -> all());
        return redirect() -> route('drinks-show', $drink -> id);
    }

    //eliminare un'entità
    public function delete($id){
        $drink = Drink::findOrFail($id);
        $drink -> delete();
        return redirect() -> route('home-drinks');
    }

}
