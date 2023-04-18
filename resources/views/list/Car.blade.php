<div class="car">
        <img src="{{$car->imagePath}}" alt="{{$car->model}} {{$car->year}}" class="car-image" >
        <div class="w3-container w3-white">
          <h6>{{$car->model}} {{$car->year}}</h6>
          <h6 class="w3-opacity">${{$car->price}}</h6>
          <p>{{$car->motorSize}}cc</p>
          <button class="w3-button w3-block w3-black w3-margin-bottom" onclick="document.location='/car-details/{{$car->id}}'">See details</button>
        </div>
    </div>