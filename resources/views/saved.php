public function carsList(Request $request, $id = null)
    {
        

        $query = Car::with('brand');

   




        if($id){
            
            $cars = Brand::find($id)->car;
            

        }

        if($request->search){
            $cars = $query->where('brandName','like',"%$request->search%")
            ->orWhere('year',$request->search)
            ->orWhere('model','like',"%$request->search%");
        }



        $cars = $query->paginate(3);
      
    
        

        
        return view('cars', ['showAbout' => false,'title'=>'Cars', 'cars' => $cars ]);

    }