<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
   return view('admin.models.create');
}

public function add(Request $request)
{
    Model_year::insert([
        'name' => $request->name,
        'modelName' => $request->modelName,
        'year' => $request->year,
        'motorSize' => $request->motorSize,
        'gear' => $request->gear,
        'fuel' => $request->fuel,
        


    ]);


    return redirect('/admin/models');
}


public function view($id)
{
    $model = Model_year::find($id);
   return view('admin.models.view',['model' => $model]);
}

public function update(Request $request,$id)
{
    
    Model_year::find($id)->update([
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
