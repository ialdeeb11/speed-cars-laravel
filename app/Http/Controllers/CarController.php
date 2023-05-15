<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index()
    {
        $frontPageCars = Car::where('frontPage',1)->get();
        $frontPageBrands = Brand::where('frontPage',1)->get();

        return view('index', ['showAbout' => true ,'title'=>'Speed-Cars','frontPageCars'=>$frontPageCars,'frontPageBrands'=>$frontPageBrands]);
    }

    public function carsList(Request $request, $brandName = null)
    {
        

        $query = Car::join('brands', 'cars.brand_id', '=', 'brands.id')
        ->select('cars.*','brands.imagePath as brandImagePath','brands.brandName as brandName',);


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

        $car = Car::find($id);


        return view('details', ['showAbout' => false ,'title'=>'Speed-Cars', 'car'=>$car]);
    }



    public function brandsList()
    {

        

            $brands = Brand::all();
        
    


        
        return view('brands', ['showAbout' => false,'title'=>'Brands', 'brands' => $brands ]);

    }

   

}

