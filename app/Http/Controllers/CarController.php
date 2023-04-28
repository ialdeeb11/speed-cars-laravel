<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrapFive();


        $query = DB::table('cars');


        if($brandName){
            $cars = $query->where('carMake',$brandName);

        }

        if($request->search){
            $cars = $query->where('carMake','like',"%$request->search%")
            ->orWhere('year',$request->search)
            ->orWhere('model','like',"%$request->search%");
        }



        $cars = $query->paginate(3);
      
    
        

        
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

