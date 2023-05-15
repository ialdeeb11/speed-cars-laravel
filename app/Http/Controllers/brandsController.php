<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class brandsController extends Controller
{
    public function brandsList()
    {



$brands = Brand::all();



return view('admin.brands.list', ['title'=>'Brands', 'brands'=> $brands]);
}


public function create()
{
   return view('admin.brands.create');
}

public function add(Request $request)
{
    Brand::insert([
        'brandName' => $request->brandName,
        'imagePath' => $request->imagePath,
        
    ]);


    return redirect('/admin/create-model');
}


public function view($id)
{
    $brand = Brand::find($id);
   return view('admin.brands.view',['brand' => $brand]);
}

public function update(Request $request,$id)
{
    
    Brand::find($id)->update([
        'brandName' => $request->brandName,
        'imagePath' => $request->imagePath,
       
    ]);


    return redirect('/admin/brands');
}

public function delete($id){

    Brand::find($id)->delete();
    return redirect('/admin/brands');


}


}
