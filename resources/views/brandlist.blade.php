<div class="brand">
        <img src="/{{$brand->imagePath}}" alt="{{$brand->brandName}}" class="brand-image" >
        <div class="w3-container w3-white">
          <h4 class="brand-text">{{$brand->brandName}}</h4>
          <button class="w3-button w3-black brand-button" onclick="document.location='/cars/{{$brand->brandName}}'">See brand</button>
        </div>
    </div>