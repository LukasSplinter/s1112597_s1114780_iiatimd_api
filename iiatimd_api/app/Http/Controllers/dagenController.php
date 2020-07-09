<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dagen;

class dagenController extends Controller
{
  public function index(){
    return dagen::all();
  }

  public function showDag($dag, $maand, $jaar){
    return dagen::whereYear("datum","=",$jaar)
    ->whereMonth("datum","=",$maand)
    ->whereDay("datum","=",$dag)->get();
  }

  public function saveDag(Request $request){
    $newDag = new dagen();
    $newDag->agenda_item = $request->agenda_item;
    $newDag->datum = $request->datum;

    $newDag->save();
  }
}
