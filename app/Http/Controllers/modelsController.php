<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Model_year;
use Illuminate\Http\Request;

class modelsController extends Controller
{
    public function modelsList()
    {



$models = Model_year::all();



return view('admin.models.list', ['title'=>'models', 'models'=> $models]);
}


public function create()
{


    $brands = Brand::all();

   return view('admin.models.create',['brands'=>$brands]);
}

public function add(Request $request)
{
    Model_year::insert([
        'brand_id' => $request->brand_id,
        'name' => $request->name,
        'modelName' => $request->modelName,
        'year' => $request->year,
        'motorSize' => $request->motorSize,
        'gear' => $request->gear,
        'fuel' => $request->fuel,
        


    ]);


    return redirect('/admin/create-car');
}


public function view($id)
{
    $model = Model_year::find($id);
    $brands = Brand::all();
   return view('admin.models.view',['model' => $model,'brands'=>$brands]);
}

public function update(Request $request,$id)
{
    
    Model_year::find($id)->update([
        'brand_id' => $request->brand_id,
        'name' => $request->name,
        'modelName' => $request->modelName,
        'year' => $request->year,
        'motorSize' => $request->motorSize,
        'gear' => $request->gear,
        'fuel' => $request->fuel,
       
    ]);


    return redirect('/admin/models');
}

public function delete($id){

    Model_year::find($id)->delete();
    return redirect('/admin/models');


}

}
