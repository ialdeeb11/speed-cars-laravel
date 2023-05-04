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



        $cars = DB::table('cars')
        ->join('brands', 'cars.brandID', '=', 'brands.id')
        ->select('cars.*','brands.imagePath as brandImagePath','brands.brandName as brandName')
        ->get();
    


        
        return view('admin.cars.list', ['title'=>'Cars', 'cars' => $cars]);

    }

    public function create()
    {

        $brands = DB::table('brands')->get();

       return view('admin.cars.create',['brands'=>$brands]);
    }


    public function add(Request $request)
    {
        DB::table('cars')->insert([
            'brandID' => $request->brandID,
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
        $car = DB::table('cars')->where('id',$id)->first();
        $brands = DB::table('brands')->get();

       return view('admin.cars.view',['car' => $car,'brands'=>$brands]);
    }

    public function update(Request $request,$id)
    {
        
        DB::table('cars')->where('id',$id)->update([
            'brandID' => $request->brandID,
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

        DB::table('cars')->where('id',$id)->delete();
        return redirect('/admin/cars');


    }



    public function sendMessage(Request $request){

        DB::table('contact')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            
        ]);


        return redirect('/');

    }

    public function viewMessages()
    {

        $messages = DB::table('contact')->get();

        return view('admin.contact.list',['messages'=>$messages]);
    }


    public function deleteMessage($id){

        DB::table('contact')->where('id',$id)->delete();
        return redirect('/admin/messages');


    }

}