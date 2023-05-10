<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Contact;
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



        $cars = Car::with('brand')
        ->get();
    


        
        return view('admin.cars.list', ['title'=>'Cars', 'cars' => $cars]);

    }

    public function create()
    {

        $brands = Brand::all();

       return view('admin.cars.create',['brands'=>$brands]);
    }


    public function add(Request $request)
    {
        Car::insert([
            'brand_id' => $request->brand_id,
            'model' => $request->model,
            'year' => $request->year,
            'price' => $request->price,
            'color' => $request->color,
            'motorSize' => $request->motorSize,
            'gear' => $request->gear,
            'fuel' => $request->fuel,
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

       return view('admin.cars.view',['car' => $car,'brands'=>$brands]);
    }

    public function update(Request $request,$id)
    {
        
        Car::find($id)->update([
            'brand_id' => $request->brand_id,
            'model' => $request->model,
            'year' => $request->year,
            'price' => $request->price,
            'color' => $request->color,
            'motorSize' => $request->motorSize,
            'gear' => $request->gear,
            'fuel' => $request->fuel,
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