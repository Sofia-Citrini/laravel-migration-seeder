<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){

        // $trains = Train::all();
        $trains = Train::where('departure_time', 'LIKE', '2023-01-24%')->get();

        dump($trains);

        return view('home', [
            'trains' => $trains
        ]);
    }
}
