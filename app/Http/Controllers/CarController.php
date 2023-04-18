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

    public function carsList(Request $request)
    {

        if($request->search){
            $cars = DB::table('cars')
            ->where('carMake','like',"%$request->search%")
            ->get();

        }else{

            $cars = DB::table('cars')->get();
        }
    


        
        return view('cars', ['showAbout' => false,'title'=>'Cars', 'cars' => $cars ]);

    }

    public function carDetails($id)
    {

        $car = DB::table('cars')->where('id',$id)->first();

        return view('details', ['showAbout' => false ,'title'=>'Speed-Cars', 'car'=>$car]);
    }
}

