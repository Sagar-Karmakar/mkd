@extends('mkd_design.layouts.mkd-layout')
@section('content')

{{-- @include('mkd_design.include.modals.picture-change-modal') --}}


<div class="container-fluid my-4 mkd-artist-profile">

      <div class="row">
            <div class="col-md-4">
                  <div class="card mb-4">
                        <div class="card-img-top">
                                    <img class="img-responsive img-fluid artist-img" class="card-img-top" src="{{asset('mkd_design/assets/images/banner.jpg')}}" alt="">
                                    <a href="#" class="change-picture-link px-2"  data-toggle="modal" data-target="#pictureChange">Edit <i class="fas fa-edit"></i></a>

                              </div>
                        <div class="card-body">
                              <div class="clearfix">
                                    <div class="float-left">
                                          {{-- Artist name --}}
                                          <h4 class="">Arpita Manna</h4>

                                          {{-- Location --}}
                                          <h6  class="pt-1"><i class="fa fa-map-marker mkd-text" aria-hidden="true"></i> Kolkata, West Bengal</h6>

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
                                          <a href="/pricing/edit" class="change-pricing px-2">Edit <i class="fas fa-edit"></i></a>

                                   </div>


                              </div>
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

                  <div class="card mb-4">
                        <img class="img-fluid card-img-top artist-banner" src="{{asset('mkd_design/assets/images/banner.jpg')}}" alt="">
                        <a href="#" class="change-cover-picture-link px-2" data-toggle="modal" data-target="#pictureChange">Edit <i class="fas fa-edit"></i></a>


                        <div class="card-body">
                                    <div class="d-flex flex-row mt-2">
                                          <div class="about pr-2  px-lg-4 vertical-line">
                                                <p class="font-weight-bold">About</p>
                                          </div>

                                          <div class="about px-2 px-lg-4 vertical-line">
                                                <p class="font-weight-bold">Reviews</p>
                                          </div>
                                          <div class="about pl-2 px-lg-4 ">
                                                <p class="font-weight-bold">Add to favourites <i class="far fa-heart mkd-text pl-2"></i></p>
                                          </div>

                                    </div>
                                    {{-- /.flex --}}

                        </div>


                  </div>
                  {{-- card --}}

                  <div class="card gallery mt-4">

                              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                          <li class="nav-item">
                                            <a class="nav-link active" id="pills-all-photos-tab" data-toggle="pill" href="#pills-all-photos" role="tab" aria-controls="pills-all-photos" aria-selected="true">All Photos</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" id="pills-albums-tab" data-toggle="pill" href="#pills-albums" role="tab" aria-controls="pills-albums" aria-selected="false">Albums</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="false">Videos</a>
                                          </li>
                                        </ul>
                        <div class="tab-content" id="pills-tabContent">



                          <div class="tab-pane fade show active" id="pills-all-photos" role="tabpanel" aria-labelledby="pills-all-photos-tab">
                              <div class="row ">
                                    <div class="col-4">
                                         <a href="mkd_design/assets/images/adult-attractive-beautiful-457701.jpg" data-lightbox="artist-gallery" data-title="This is model" ><img class="img-fluid profile-gallery-img" src="{{asset('mkd_design/assets/images/adult-attractive-beautiful-457701.jpg')}}" alt=""></a>



                                    </div>
                                    <div class="col-4">
                                          <a href="mkd_design/assets/images/model.jpg" data-lightbox="artist-gallery" ><img class="img-fluid profile-gallery-img"  src="{{asset('mkd_design/assets/images/model.jpg')}}" alt=""></a>


                                    </div>
                                    <div class="col-4">
                                          <a href="mkd_design/assets/images/adult-attractive-beautiful-457701.jpg" data-lightbox="artist-gallery" ><img class="img-fluid profile-gallery-img"  src="{{asset('mkd_design/assets/images/adult-attractive-beautiful-457701.jpg')}}" alt=""></a>


                                    </div>


                                    </div>
                                    {{-- /.row --}}


                                    <div class="row ">
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
                              <div class="tab-pane fade" id="pills-albums" role="tabpanel" aria-labelledby="pills-albums-tab">...</div>
                              {{-- /.pill --}}
                              <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">...</div>
                        </div>
                        {{-- nav pills end  --}}
                                    <div class="text-center">
                                                <a href="#"><h6>View More <i class="far fa-arrow-alt-circle-down pl-1"></i></h6></a>
                                    </div>



                  </div>
                  {{-- /.card --}}

            </div>
            {{-- /.col --}}

      </div>
      {{-- /.row --}}


</div>
{{-- /.container --}}








@endsection
