<?php

namespace App\Http\Controllers;

use App\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function index()
  {
    $drinks = Drink::all();
    return view ('pages.drinks', compact('drinks'));
  }

  public function show($id)
  {
    $drink = Drink::findOrFail($id);
    return view ('pages.drinks-show', compact('drink'));
  }

  public function create()
  {
    return view ('pages.drinks-create');
  }

  public function store(Request $request)
  {
    Drink::create($request -> all());
    return redirect() -> route('home-drinks');
  }
}
