<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){

        $trains =  Train::all();

        dump($trains);

        return view('home');
    }
}
