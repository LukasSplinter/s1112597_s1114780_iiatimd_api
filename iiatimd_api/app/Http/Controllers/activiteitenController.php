<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activiteiten;

class activiteitenController extends Controller
{
    public function index(){
      return Activiteiten::all();
    }

    public function show($activiteit_id){
      return Activiteiten::where("activiteit_id","=",$activiteit_id)->get();
    }

    public function random(){
      return Activiteiten::orderByRaw("RAND()")->first();
    }
}
