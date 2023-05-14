<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Contact;
use App\Models\Model_year;
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



        $cars = Car::all();
    


        
        return view('admin.cars.list', ['title'=>'Cars', 'cars' => $cars]);

    }

    public function create()
    {

        $brands = Brand::all();
        $models = Model_year::all();

       return view('admin.cars.create',['brands'=>$brands,'models'=>$models]);
    }


    public function add(Request $request)
    {
        Car::insert([
            'brand_id' => $request->brand_id,
            'model_id' => $request->model_id,
            
            'price' => $request->price,
            'color' => $request->color,
            
            'used' => $request->used,
            'imagePath' => $request->imagePath,
            'frontPage' => $request->frontPage,
            
            
        ]);


        return redirect('/admin/cars');
    }


    public function view($id)
    {
        $car = Car::find($id);
        $brands = Brand::all();
        $models = Model_year::all();

       return view('admin.cars.view',['car' => $car,'brands'=>$brands,'models'=>$models]);
    }

    public function update(Request $request,$id)
    {
        
        Car::find($id)->update([
            'brand_id' => $request->brand_id,
            'model_id' => $request->model_id,
            
            'price' => $request->price,
            'color' => $request->color,
            
            'used' => $request->used,
            'imagePath' => $request->imagePath,
            'frontPage' => $request->frontPage,
            
            
        ]);


        return redirect('/admin/cars');
    }

    public function delete($id){

        Car::find($id)->delete();
        return redirect('/admin/cars');


    }



    public function sendMessage(Request $request){

        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            
        ]);


        return redirect('/');

    }

    public function viewMessages()
    {

        $messages = Contact::all();

        return view('admin.contact.list',['messages'=>$messages]);
    }


    public function deleteMessage($id){

        Contact::find($id)->delete();
        return redirect('/admin/messages');


    }

}