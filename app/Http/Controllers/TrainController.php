<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $treni = Train::all()->where('orario_di_partenza', ">", now());
        return view("home", compact("treni"));
    }
}
