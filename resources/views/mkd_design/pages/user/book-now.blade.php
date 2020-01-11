@extends('mkd_design.layouts.mkd-layout')
@section('title','Book Now')
@section('content')



<div class="container-fluid book-now">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                {{-- artist image --}}
                <img class="img-responsive img-fluid card-img-top rounded" src="{{asset('mkd_design/assets/images/adult-attractive-beautiful-457701.jpg')}}" alt="artist's image">

                <div class="card-body">
                    {{-- messge --}}
                    <p>Your booking to the artist <span><a href="#">Arpita Manna</a></span></p>

                </div>

            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="mkd-text pb-2">Add your Information</h5>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputName">Name :</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Full Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPhoneNumber">Phone Number</label>
                                <input type="number" class="form-control" id="inputPhoneNumber" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputMakeuptype">Make up Type :</label>
                            <input type="text" class="form-control" id="inputMakeuptype" placeholder="Make up Type">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputNumOfPeople">Number of people</label>
                                <input type="number" class="form-control" id="inputNumOfPeople" placeholder="Number of people">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="time" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputmessge">Messege</label>
                            <input type="text" class="form-control" id="inputmessge" placeholder="Leave a messege">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                            </div>
                        </div>
                        <button type="submit" class="btn mkd-btn">Submit</button>
                    </form>

                </div>
            </div>
        </div>

    </div>

</div>



@endsection



