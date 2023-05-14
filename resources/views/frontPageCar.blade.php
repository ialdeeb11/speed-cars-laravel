<div class="w3-third w3-margin-bottom">
    <img src="/{{$car->imagePath}}" alt="{{$car->model->modelName}} {{$car->model->year}}" width="100%">
    <div class="w3-container w3-white">
      <h3>{{$car->model->modelName}} {{$car->model->year}}</h3>
      <h6 class="w3-opacity">${{$car->price}}</h6>
      <p>{{$car->model->motorSize}}cc</p>
 
      <button class="w3-button w3-block w3-black w3-margin-bottom " onclick="document.location='/car-details/{{$car->id}}'" >See details</button>
    </div>
  </div>
  

