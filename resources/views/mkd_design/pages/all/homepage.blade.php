@extends('mkd_design.layouts.mkd-layout')
@section('title','MakeUp Duia')
@section('content')




            <!-- hero banner -->

            <div class="container-fluid main-page-banner text-left mb-md-4">
                {{-- session message --}}
                @if(Session::has('message'))
                <p class="alert {{Session::get('alert-class')}}">{{ Session::get('message') }}</p>
                @endif
                {{-- session message --}}
                <div class="heading-action">
                <div class="banner-heading text-white">
                        <h4>Choose your best make up artist. By view their work profile in <a href="/">MakeUP Dunia</a> </h4>
                        <!-- <hr class="white-hr"> -->
                        <h6 class="text-left">Your tension-free glamorous look is just two steps ahead</h6>
                </div>
                <!-- /.heading -->
                <div class="buttons">
                    <a href="{{route('register.index')}}" class="btn text-white mt-4 mr-3 mkd-btn mkd-btn-active">Join us now</a>

                </div>
                <!-- /.buttons -->

            </div>
            <!-- /.heading-action -->

            </div>
            <!-- /.container-fluid -->

            <!-- Showcase artist -->

            <div class="container-fluid showcase-artists mb-4">
                    <div class="showcase-heading text-left my-md-4">
                        <h3 class="mb-3">Best rated make up artists here</h3>
                        <!-- <hr> -->
                        <div class="clearfix">
                                <div class="float-left">
                                    <h6>Watch, Think and choose your artist for your best attractive look.</h6>
                                </div>
                                <div class="float-right">
                                {{-- <span class="badge badge-success">View more</span> --}}

                                </div>
                        </div>
                        <!-- /.clearfix -->
                    </div>
                    <!-- /.heading -->

        {{-- artis booking row started --}}

                <div class="artist-img row mb-4">

                    @foreach ($artists as $artist)
                    <div class="col-md-3">
                    <div class="card mkd-card">
                        <img class="img-responsive rounded" class="card-img-top " src="{{asset($artist['profile_picture'])}}" alt="">
                            <div class="card-footer mkd-card-footer">
                                <p class="p-0">Artist : <span><a href="#">{{ $artist['name'] }}</a></span></p>
                                <h6 class="">
                                    @foreach ($artist['makeup_type'] as $item)
                                        {{ $item->makeup_type }},
                                    @endforeach
                                </h6>
                                <div class="d-flex flex-row justify-content-between review">
                                <div class="pt-2">
                                    <h6 class="text-info">Started from :
                                    @if (is_null($artist['price']))
                                        0 ₹
                                    @else
                                        {{ $artist['price'] }} ₹
                                    @endif
                                    </h6>

                                </div>
                                <div class="mt-1 star-icons">
                                @if ($artist['count'] == 0)
                                    0
                                @else
                                    {{ ceil($artist['star']/$artist['count']) }}
                                @endif
                                    <i class="fas fa-star"></i>
                                </div>

                            </div>
                            <!-- /.clearfix -->

                            <a href="{{route('book.now',$artist['user_name'])}}" class="btn btn-block mt-2 btn-sm mkd-btn text-white">Book Now</></a>

                            {{-- visit profile --}}
                            <a href="/profile/{{$artist['user_name']}}"><p class="text-center mt-1"><i class="far fa-eye"></i> Visit profile</p></a>
                            </div>
                            <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    @endforeach
                </div>
                <!-- /.artist-img row-->
                {{-- go to artists list --}}
                <div class="more-button text-center my-4">
                    <a href="{{route('artist.list')}}" class="btn px-4 mkd-btn-inactive">View More <i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>

                </div>


            </div>
            <!-- /.container-fluid -->
<!-- /. showcase artist -->

<!-- User benefit -->
<div class="container-fluid user-benefit pt-4">
    <div class="row">
        <div class="col-md-6 benefits">
            <ul>
                <li class="mb-4 ">
                    <h4>

                    <span>Why MakeUp Dunia?</span>
                    </h4>
                </li>

                <li>
                    <p>
                    <i class="far fa-check-circle"></i>
                    <span>Your choice matters. You can choose from top artists. </span>
                    </p>
                </li>
                <li>
                    <p>
                    <i class="far fa-check-circle"></i>
                    <span>You can choose artist by watching their work profile</span>
                    </p>
                </li>

                <li>
                    <p>
                    <i class="far fa-check-circle"></i>
                    <span>You can contact a artist for furthur details</span>
                    </p>
                </li>
                {{-- <li>
                    <p>
                    <i class="far fa-check-circle"></i>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, alias.</span>
                    </p>
                </li>
                <li>
                    <p>
                    <i class="far fa-check-circle"></i>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, alias.</span>
                    </p>
                </li>
                <li>
                    <p>
                    <i class="far fa-check-circle"></i>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, alias.</span>
                    </p>
                </li> --}}
                <li>
                        <a href="#" class="btn  mkd-btn-inactive  mt-3 ">View More</a>
                </li>

            </ul>

        </div>
        <!-- /.col -->

        <div class="col-md-2"></div>

        @if (is_null(Session::get('user_name')))
        <div class="col-md-4 ">

            {{-- sign Up --}}
            <div class="card mkd-card p-4">
                <h4 class="mkd-text">Sign Up to get your perfect look</h4>
                <form method="POST" action="{{route('user.register.submit')}}">
                    @csrf
                        <div class="form-group">
                            <input type="name" class="form-control" name="name"  placeholder="Your Name">
                            <p class="error-message">{{ $errors->first('name') }}</p>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email"  placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We will never share your email with anyone else.</small>
                            <p class="error-message">{{ $errors->first('email') }}</p>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password"  placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password">
                            <p class="error-message">{{ $errors->first('password') }}</p>
                        </div>
                        {{-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> --}}
                        <button type="submit" class="btn mkd-btn text-white btn-block mt-1">Submit</button>
                </form>
            </div>
    </div>
    <!-- /.col -->
        @endif


    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->
<!-- User benefit End -->

    {{-- Showcase area --}}

    <div class="container-fluid showcase-area">
        <div class="row mb-4">
            @foreach ($images as $item)
                <div class="col-md-3">
                    <img class="img-responsive rounded mb-3" src="{{asset($item->image)}}" alt="">
                </div>
            @endforeach
        </div>
        {{-- /.row --}}
    </div>
    {{-- /.Showcase area --}}


@endsection
