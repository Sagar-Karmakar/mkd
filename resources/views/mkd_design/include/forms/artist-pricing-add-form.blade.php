




<div class="container-fluid mt-4">
<form class="pricing-form" action="{{route('price.store')}}" method="POST">
    @csrf
    <input type="hidden" name="user_name" value="{{Session::get('user_name')}}">
  <div class="form-row">
    <div class="form-group col-md-8">
        <label for="inputName">Service Name:</label>
        <input type="text" name="price_name" class="form-control service-name-input" id="inputPriceName" placeholder="Service Name" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputName">Price</label>
      <input type="number" name="price" class="form-control service-price-input" id="inputPriceName" >
  </div>


  <button  class="ml-1 btn  mkd-btn add-service">Add Service</button>




{{-- pricing --}}
<div class="container-fluid mt-4">
  <ul class="list-group service-collection">

  </ul>
  </div>

  <button type="submit" class="btn btn-success mt-2 ml-3">Done</button>
</form>
</div>

