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
}
