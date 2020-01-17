@extends('mkd_design.layouts.mkd-layout')
@section('title','Book Now')
@section('content')



<div class="container-fluid book-now">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                {{-- artist image --}}
                <img class="img-responsive img-fluid card-img-top rounded"
                @if (is_null($artist->profile_picture))
                src="{{asset('storage/artist/profile_picture/profile.png')}}"
                @else
                src="{{asset($artist->profile_picture)}}"
                @endif alt="artist's image">

                <div class="card-body">
                    {{-- messge --}}
                    <p>Your booking to the artist <span><a href="#">{{ $artist->name }}</a></span></p>

                </div>

            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="mkd-text pb-2">Add your Information</h5>

                    <form method="POST" action="{{route('booked')}}">
                        @csrf

                        <input type="hidden" name="artist_user_name" value="{{$artist->user_name}}">
                        <input type="hidden" name="user_user_name" value="{{\Session::get('user_name')}}">
                        <input type="hidden" name="artist_name" value="{{$artist->name}}">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputName">Name :</label>
                            <input type="text" class="form-control" name="full_name" id="inputName" placeholder="Full Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPhoneNumber">Phone Number</label>
                                <input type="number" class="form-control" name="phone_number" id="inputPhoneNumber" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputMakeuptype">Make up Type :</label>
                                    <select class="form-control" name="makeup_type">
                                        <option selected disabled>Select Makeup Type</option>
                                        @foreach ($makeup_type as $makeup)
                                        <option value="{{ $makeup->makeup_type }}" >
                                            {{ $makeup->makeup_type }}
                                        </option>
                                        @endforeach
                                    </select>
                            </div>
                        <div class="form-group col-md-6">
                            <label for="inputNumOfPeople">Number of people</label>
                                <input type="number" class="form-control" id="inputNumOfPeople" name="number_of_people" placeholder="Number of people">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputCity">Date</label>
                                <input type="date" name="date" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">Time</label>
                                <input type="time" name="time" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputmessge">Messege</label>
                            <input type="text" class="form-control" name="message" id="inputmessge" placeholder="Leave a messege">
                        </div>
                        {{--  <div class="form-group">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                            </div>
                        </div>  --}}
                        <button type="submit" class="btn mkd-btn">Submit</button>
                    </form>

                </div>
            </div>
        </div>

    </div>

</div>



@endsection



