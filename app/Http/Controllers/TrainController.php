<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $treni = Train::all();
        // dd($treni);
        return view("home", compact("treni"));
    }
}
