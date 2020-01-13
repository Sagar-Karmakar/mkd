@extends('mkd_design.layouts.mkd-layout')
@section('content')



<div class="container-fluid my-4 mkd-artist-profile">
                    {{-- session message --}}
                    @if(Session::has('message'))
                    <p class="alert {{Session::get('alert-class')}}">{{ Session::get('message') }}</p>
                    @endif
                    {{-- session message --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-img-top">
                    <img class="img-responsive img-fluid profile-img" class="card-img-top"
                            @if (is_null($user->profile_picture))
                            src="{{asset('storage/artist/profile_picture/profile.png')}}"
                            @else
                            src="{{asset($user->profile_picture)}}"
                            @endif
                    alt="profile picture ">
                    @if ($user->user_name === $user_name)
                    <a href="#" class="change-picture-link px-2"  data-toggle="modal" data-target="#pictureChange">Edit <i class="fas fa-edit"></i></a>
                    @include('mkd_design.include.modals.profile-picture-change-modal',[$user])
                    @endif
                </div>
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                {{-- Artist name --}}
                                <h4 class="">{{$user->name}}</h4>
                                {{-- Location --}}
                                <h6  class="pt-lg-1"><i class="fa fa-map-marker mkd-text" aria-hidden="true"></i> Kolkata, West Bengal</h6>
                                {{-- Degree --}}
                                <p><strong> Bsc in MakeUp</strong></p>
                            </div>
                                <div class="float-right">
                                    {{-- review --}}
                                    {{-- <p>1 review </p> --}}
                                    <span class="badge badge-success"><span> 4.1  <i class="fas fa-star-half-alt"></i></span>
                                </div>
                        </div>
                            {{-- book and messege --}}
                            <div class="d-flex flex-row mt-2">
                                <a href="#" class="btn px-xm-2 px-lg-4 mr-4 text-white mkd-btn mkd-btn-active mr-2">Book now</a>
                                <a href="#" class="btn px-xm-2 px-lg-4 mr-4 mkd-btn-inactive ">Messege</a>
                                <a href="#"><h3><i class="fa fa-share-alt light-text" aria-hidden="true"></i></h3></a>
                            </div>

                            {{-- <hr class="d-block d-md-none"> --}}


                            {{-- this is for phone view only --}}

                            <div class="d-flex flex-row mt-4 d-block d-md-none">
                                <div class="about pr-2  px-lg-4 vertical-line">
                                        <p class="font-weight-bold">About</p>
                                </div>

                                <div class="about px-2 px-lg-4 vertical-line">
                                        <p class="font-weight-bold">Reviews</p>
                                </div>
                                <div class="about dropdown pl-2 px-lg-4 ">
                                        <a href="#" class="font-weight-bold"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <p> Add post <i class="fa fa-plus mkd-text pl-1"></p></i></a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#pictureAdd" >Photo Upload</a>
                                            @include('mkd_design.include.modals.photo-add-modal')

                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#videoAdd" >Video Upload</a>
                                            @include('mkd_design.include.modals.video-add-modal')


                                        </div>
                                </div>

                            </div>
                            {{-- /.flex --}}

                            {{-- upto here for Phone view only --}}


                    </div>
            </div>
            {{-- /.card --}}
            <div class="card">
                <div class="card-body">
                    <div class="flex-row d-flex justify-content-between">
                        <div>
                            <h4 class="">Pricing</h4>
                        </div>
                            <div class=" mt-1">
                                @if ($user->user_name === $user_name)
                                <a href="/pricing/edit" class="change-pricing px-2">Edit <i class="fas fa-edit"></i></a>
                                @endif
                            </div>
                    </div>
                    {{-- /.flex --}}
                    {{--  --}}
                        <hr>
                        <div class="clearfix my-2">
                            <div class="float-left">
                                <h6>Bridal Makeup</h6>
                            </div>
                            <div class="float-right">
                                    <p><i class="fa fa-inr pr-2" aria-hidden="true"></i>4000</p>
                            </div>
                        </div>
                            <div class="clearfix my-2">
                                <div class="float-left">
                                    <h6>Bridal Makeup</h6>
                                </div>
                                <div class="float-right">
                                    <p><i class="fa fa-inr pr-2" aria-hidden="true"></i>4000</p>
                                </div>
                            </div>
                                <div class="clearfix my-2">
                                    <div class="float-left">
                                        <h6>Bridal Makeup</h6>
                                    </div>
                                    <div class="float-right">
                                        <p><i class="fa fa-inr pr-2" aria-hidden="true"></i>4000</p>
                                    </div>
                                </div>
                                <div class="clearfix my-2">
                                    <div class="float-left">
                                        <h6>Bridal Makeup</h6>
                                    </div>
                                    <div class="float-right">
                                        <p><i class="fa fa-inr pr-2" aria-hidden="true"></i>4000</p>
                                    </div>
                                </div>
                </div>
            </div>
            {{-- /.card --}}
        </div>
        {{-- /.col --}}
            <div class="col-md-8">
                    <div class="card mb-4 d-none d-md-block">
                        <img class="img-fluid card-img-top artist-banner"
                                    @if (is_null($user->cover_picture))
                                    src="{{asset('storage/artist/cover_picture/cover.png')}}"
                                    @else
                                    src="{{asset($user->cover_picture)}}"
                                    @endif
                        alt="cover picture">
                        @if ($user->user_name === $user_name)
                        <a href="#" class="change-cover-picture-link px-2" data-toggle="modal" data-target="#pictureChange">Edit <i class="fas fa-edit"></i></a>
                        @include('mkd_design.include.modals.cover-picture-change-modal',[$user])
                        @endif
                        <div class="card-body">
                                    <div class="d-flex flex-row mt-2">
                                            <div class="about pr-2  px-lg-4 vertical-line">
                                                    <p class="font-weight-bold">About</p>
                                            </div>

                                            <div class="about px-2 px-lg-4 vertical-line">
                                                    <p class="font-weight-bold">Reviews</p>
                                            </div>
                                            <div class="about dropdown pl-2 px-lg-4 ">
                                                    <a href="#" class="font-weight-bold"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <p> Add post <i class="fa fa-plus mkd-text pl-1"></i></p></a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#pictureAdd" >Photo Upload</a>
                                                    @include('mkd_design.include.modals.photo-add-modal')

                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#videoAdd" >Video Upload</a>
                                                    @include('mkd_design.include.modals.video-add-modal')


                                                    </div>
                                            </div>

                                    </div>
                                    {{-- /.flex --}}

                        </div>
                        {{-- /.card body --}}


                    </div>
                    {{-- card --}}

                    <div class="card gallery mt-4">
                        <div class="card-body">

                                    <ul class="nav nav-tabs mb-3" id="tabs-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="tabs-all-photos-tab" data-toggle="pill" href="#tabs-all-photos" role="tab" aria-controls="tabs-all-photos" aria-selected="true">All Photos</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tabs-albums-tab" data-toggle="pill" href="#tabs-albums" role="tab" aria-controls="tabs-albums" aria-selected="false">Albums</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tabs-video-tab" data-toggle="pill" href="#tabs-video" role="tab" aria-controls="tabs-video" aria-selected="false">Videos</a>
                                                </li>
                                    </ul>
                                <div class="tab-content" id="tabs-tabContent">



                                <div class="tab-pane fade show active" id="tabs-all-photos" role="tabpanel" aria-labelledby="tabs-all-photos-tab">
                                    <div class="row no-gutters">
                                        <div class="col-4">
                                                <a href="mkd_design/assets/images/adult-attractive-beautiful-457701.jpg"  data-lightbox="artist-gallery" data-title="This is model" ><img class="img-fluid profile-gallery-img" src="{{asset('mkd_design/assets/images/adult-attractive-beautiful-457701.jpg')}}" alt=""></a>



                                        </div>
                                        <div class="col-4">
                                                <a href="mkd_design/assets/images/model.jpg" data-lightbox="artist-gallery" ><img class="img-fluid profile-gallery-img"  src="{{asset('mkd_design/assets/images/model.jpg')}}" alt=""></a>


                                        </div>
                                        <div class="col-4">
                                                <a href="mkd_design/assets/images/adult-attractive-beautiful-457701.jpg" data-lightbox="artist-gallery" ><img class="img-fluid profile-gallery-img"  src="{{asset('mkd_design/assets/images/adult-attractive-beautiful-457701.jpg')}}" alt=""></a>


                                        </div>


                                    </div>
                                    {{-- /.row --}}


                                        <div class="row no-gutters">
                                                <div class="col-4">
                                                    <a href="mkd_design/assets/images/banner.jpg" data-lightbox="artist-gallery" ><img class="img-fluid profile-gallery-img"  src="{{asset('mkd_design/assets/images/banner.jpg')}}" alt=""></a>


                                            </div>
                                            <div class="col-4">
                                                    <a href="mkd_design/assets/images/adult-attractive-beautiful-457701.jpg" data-lightbox="artist-gallery" ><img class="img-fluid profile-gallery-img"  src="{{asset('mkd_design/assets/images/adult-attractive-beautiful-457701.jpg')}}" alt=""></a>



                                            </div>

                                            <div class="col-4">
                                                    <a href="mkd_design/assets/images/banner.jpg" data-lightbox="artist-gallery" ><img class="img-fluid profile-gallery-img"  src="{{asset('mkd_design/assets/images/banner.jpg')}}" alt=""></a>


                                            </div>



                                        </div>
                                        {{-- /.row --}}
                                </div>
                                {{-- /.pill --}}
                                <div class="tab-pane fade" id="tabs-albums" role="tabpanel" aria-labelledby="tabs-albums-tab">...</div>
                                {{-- /.pill --}}
                                <div class="tab-pane fade" id="tabs-video" role="tabpanel" aria-labelledby="tabs-video-tab">...</div>
                            </div>
                            {{-- nav pills end  --}}
                                        <div class="text-center mt-2">
                                                    <a href="#"><p>View More <i class="far fa-arrow-alt-circle-down pl-1"></i></p></a>
                                        </div>


                        </div>
                        {{-- /.card-body --}}

                    </div>
                    {{-- /.card --}}

                    <div class="card">
                        <div class="card-body">
                            <h6><span>3</span> user review</h6>

                            {{-- review --}}
                            <div class="my-3">
                                <!-- Media top -->
                                <div class="media">
                                    <img src="{{asset('mkd_design/assets/images/model.jpg')}}" class="align-self-start rounded mt-1 mr-3" style="width:60px; height:60px">
                                    <div class="media-body">
                                    <h6>Arpita Manna <small><i>Posted on February 19, 2020</i></small></h6>
                                    <div class=" star-icons">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    </div>
                                </div>
                                <hr>
                            </div>
                            {{-- /. review --}}


                            {{-- review --}}
                            <div class="my-3">
                                <!-- Media top -->
                                <div class="media">
                                    <img src="{{asset('mkd_design/assets/images/model.jpg')}}" class="align-self-start rounded mt-1 mr-3" style="width:60px; height:60px">
                                    <div class="media-body">
                                    <h6>Arpita Manna <small><i>Posted on February 19, 2020</i></small></h6>
                                    <div class=" star-icons">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    </div>
                                </div>
                                <hr>
                            </div>
                            {{-- /. review --}}

                            {{-- Write a review --}}

                            <h5>Write a review</h5>


                            <section class='rating-widget'>

                                <!-- Rating Stars Box -->
                                <div class='rating-stars mt-3'>
                                    <ul id='stars'>
                                    <li class='star' title='Poor' data-value='1'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Fair' data-value='2'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Good' data-value='3'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Excellent' data-value='4'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='WOW!!!' data-value='5'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    </ul>
                                </div>

                                <div class='success-box my-2'>
                                    <div class='clearfix'></div>

                                    <div class='text-message'></div>
                                    <div class='clearfix'></div>
                                </div>



                            </section>

                                <div class="form-group">
                                    {{-- <label for="comment">Comment:</label> --}}
                                    <textarea class="form-control" rows="5" id="comment" placeholder="write a review"></textarea>
                                </div>
                                <button type="submit" class="btn btn-outline-success">Submit</button>






                        </div>
                        {{-- /.card-body --}}

                    </div>
                    {{-- /.card --}}

            </div>
            {{-- /.col --}}

    </div>
    {{-- /.row --}}




</div>
{{-- /.container --}}











@endsection
