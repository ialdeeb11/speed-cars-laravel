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

        $car = DB::table('cars')->first();







        return view('details', ['showAbout' => false ,'title'=>'Speed-Cars', 'carMake'=>$car->carMake,'path' => $car->imagePath,'model'=> $car->model,'year'=> $car->year,'price'=> $car->price,'motorSize'=> $car->motorSize,'gear'=>$car->gear,'color'=>$car->color,'license'=>$car->license,'fuel'=>$car->fuel,'used'=>$car->used,'customs'=>$car->customs,'insurance'=>$car->insurance]);
    }
}

