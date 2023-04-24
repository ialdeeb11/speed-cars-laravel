<div class="brand">
        <img src="photos/{{$brand->imagePath}}" alt="{{$brand->brandName}}" class="brand-image" >
        <div class="w3-container w3-white">
          <h6>{{$brand->brandName}}</h6>
          <button class="w3-button w3-block w3-black w3-margin-bottom" onclick="document.location='/brand-cars/{{$brand->brandName}}'">See brand</button>
        </div>
    </div>