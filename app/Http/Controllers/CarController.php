<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index()
    {
        $frontPageCars = DB::table('cars')->where('frontPage',1)->get();







        return view('index', ['showAbout' => true ,'title'=>'Speed-Cars','frontPageCars'=>$frontPageCars]);
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



    public function brandsList(Request $request)
    {

        if($request->search){
            $brands = DB::table('brands')
            ->where('brandName','like',"%$request->search%")
            ->get();

        }else{

            $brands = DB::table('brands')->get();
        }
    


        
        return view('brands', ['showAbout' => false,'title'=>'Brands', 'brands' => $brands ]);

    }

}

