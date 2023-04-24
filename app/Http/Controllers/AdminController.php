<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.index');
    }

    
    
    public function carsList()
    {



        $cars = DB::table('cars')->get();
    


        
        return view('admin.cars.list', ['title'=>'Cars', 'cars' => $cars ]);

    }

    public function create()
    {
       return view('admin.cars.create');
    }
    public function add(Request $request)
    {
        DB::table('cars')->insert([
            'color' => $request->color,
            'carMake' => $request->carMake,
            'model' => $request->model,
            'year' => $request->year,
            'price' => $request->price,
            'motorSize' => $request->motorSize,
            'gear' => $request->gear,
            'license' => $request->license,
            'fuel' => $request->fuel,
            'used' => $request->used,
            'customs' => $request->customs,
            'insurance' => $request->insurance,
            'imagePath' => $request->imagePath,
            'frontPageCar' => $request->frontPage,
            
        ]);


        return redirect('/admin/cars');
    }


    public function view($id)
    {
        $car = DB::table('cars')->where('id',$id)->first();
       return view('admin.cars.view',['car' => $car]);
    }

    public function update(Request $request,$id)
    {
        
        DB::table('cars')->where('id',$id)->update([
            'color' => $request->color,
            'carMake' => $request->carMake,
            'model' => $request->model,
            'year' => $request->year,
            'price' => $request->price,
            'motorSize' => $request->motorSize,
            'gear' => $request->gear,
            'license' => $request->license,
            'fuel' => $request->fuel,
            'used' => $request->used,
            'customs' => $request->customs,
            'insurance' => $request->insurance,
            'imagePath' => $request->imagePath,
            'frontPageCar' => $request->frontPage,
            
        ]);


        return redirect('/admin/cars');
    }

    public function delete($id){

        DB::table('cars')->where('id',$id)->delete();
        return redirect('/admin/cars');


    }
}