@extends('mkd_design.layouts.mkd-layout')
@section('content')

<div class="container-fluid artist-list">
      <div class="row">
            <div class="col-md-3">
                  <div class="card border-none">
                        <div class="card-body">
                        {{-- places --}}
                         <h6>Place</h6>
                              <div class="checkbox">
                                    <label><input type="checkbox" value="">Behala</label>
                              </div>
                              <div class="checkbox">
                                    <label><input type="checkbox" value="">Thakurpukur</label>
                              </div>
                              <div class="checkbox">
                                    <label><input type="checkbox" value="">North Kolata</label>
                              </div>
                              <div class="checkbox">
                                    <label><input type="checkbox" value="">Goria</label>
                              </div>

                              {{-- /.places --}}
                         {{-- Make Up type --}}
                         <h6 class="mt-3">Make Up type</h6>
                              <div class="checkbox">
                                    <label><input type="checkbox" value="">Bridal</label>
                              </div>
                              <div class="checkbox">
                                    <label><input type="checkbox" value="">Hair Style</label>
                              </div>
                              <div class="checkbox">
                                    <label><input type="checkbox" value="">Party Make up</label>
                              </div>
                              <div class="checkbox">
                                    <label><input type="checkbox" value="">Mehendi</label>
                              </div>
                              <div class="checkbox">
                                    <label><input type="checkbox" value="">Grooming</label>
                              </div>


                        </div>
                         {{--/.card-body  --}}

                  </div>
                  {{-- /.card --}}

            </div>
            <div class="col-md-9">
                  <div class="card">
                        <div class="row">

                            @foreach ($users as $user)
                            <div class="col-md-4">
                                <div class="card mkd-card">
                                <img class="img-responsive rounded" class="card-img-top " src="{{asset('storage/artist/profile_picture/'.$user->profile_picture)}}" alt="">
                                    <div class="card-footer mkd-card-footer">
                                        <p class="p-0">Artist : <span><a href="/profile/{{$user->user_name}}">{{$user->name}}</a></span></p>
                                        <h6 class="">Bridal makeup, party makeUp</h6>
                                        <div class="d-flex flex-row justify-content-between review">
                                            <div class="pt-2">
                                                <h6 class="text-info">1000$</h6>
                                            </div>
                                            <div class="mt-1 star-icons">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                        <!-- /.clearfix -->
                                        <a href="#" class="btn btn-block mt-2 btn-sm mkd-btn text-white">Book Now</></a>
                                        {{-- visit profile --}}
                                        <a href="/profile/{{$user->user_name}}"><p class="text-center mt-1"><i class="far fa-eye"></i>Visit profile</p></a>
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.card -->
                            </div>
                            @endforeach

                        </div>
                        <div class="row">
                              <div class="col-md-4">

                              </div>
                              <div class="col-md-4">

                              </div>
                              <div class="col-md-4">

                              </div>

                        </div>



                  </div>

            </div>
      </div>
</div>




@endsection

