<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index()
    {







        return view('index', ['showAbout' => true ,'title'=>'Speed-Cars']);
    }

    public function carsList()
    {



        $cars = DB::table('cars')->get();
    


        
        return view('cars', ['showAbout' => false,'title'=>'Cars', 'cars' => $cars ]);

    }

    public function carDetails()
    {







        return view('details', ['showAbout' => false ,'title'=>'Speed-Cars']);
    }
}
