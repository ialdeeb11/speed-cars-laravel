<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class brandsController extends Controller
{
    public function brandsList()
    {



$brands = DB::table('Brands')->get();



return view('admin.brands.list', ['title'=>'Brands', 'brands'=> $brands]);
}


public function create()
{
   return view('admin.brands.create');
}

public function add(Request $request)
{
    DB::table('brands')->insert([
        'brandName' => $request->brandName,
        'imagePath' => $request->imagePath,
        
    ]);


    return redirect('/admin/brands');
}


public function view($id)
{
    $brand = DB::table('brands')->where('id',$id)->first();
   return view('admin.brands.view',['brand' => $brand]);
}

public function update(Request $request,$id)
{
    
    DB::table('brands')->where('id',$id)->update([
        'brandName' => $request->brandName,
        'imagePath' => $request->imagePath,
       
    ]);


    return redirect('/admin/brands');
}

public function delete($id){

    DB::table('brands')->where('id',$id)->delete();
    return redirect('/admin/brands');


}


}
