<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index()
    {
        $frontPageCars = DB::table('cars')->where('frontPage',1)->get();
        $frontPageBrands = DB::table('brands')->where('frontPage',1)->get();

        return view('index', ['showAbout' => true ,'title'=>'Speed-Cars','frontPageCars'=>$frontPageCars,'frontPageBrands'=>$frontPageBrands]);
    }

    public function carsList(Request $request, $brandName = null)
    {
        

        $query = DB::table('cars')
        ->join('brands', 'cars.brandID', '=', 'brands.id')
        ->select('cars.*','brands.imagePath as brandImagePath','brands.brandName as brandName');


        if($brandName){
            $cars = $query->where('brandName',$brandName);

        }

        if($request->search){
            $cars = $query->where('brandName','like',"%$request->search%")
            ->orWhere('year',$request->search)
            ->orWhere('model','like',"%$request->search%");
        }



        $cars = $query->paginate(3);
      
    
        

        
        return view('cars', ['showAbout' => false,'title'=>'Cars', 'cars' => $cars ]);

    }

    public function carDetails($id)
    {

        $car = DB::table('cars')->where('cars.id',$id)
        ->join('brands', 'cars.brandID', '=', 'brands.id')
        ->select('cars.*','brands.imagePath as brandImagePath','brands.brandName as brandName')
        ->first();


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

