@extends('mkd_design.layouts.mkd-layout')
@section('content')


<div class="container-fluid my-4 mkd-artist-profile">
      <div class="row">
            <div class="col-md-4">
                  <div class="card mb-4">
                        <div class="card-img-top">
                                    <img class="img-responsive img-fluid artist-img" class="card-img-top" src="{{asset('mkd_design/assets/img/banner.jpg')}}" alt="">
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
                                          <span class="badge badge-success"><span> 4.1  <i class="fas fa-star-half-alt"></span></i></span>


                                    </div>
                              </div>
                              
                              {{-- book and messege --}}
                              <div class="d-flex flex-row mt-2">
                                          <a href="#" class="btn px-4 mr-4 text-white mkd-btn mkd-btn-active mr-2">Book now</a>
                                          <a href="#" class="btn px-4 mr-4 mkd-btn-inactive ">Messege</a>
                                          <a href="#"><h3><i class="fa fa-share-alt light-text" aria-hidden="true"></i></h3></a>
                                    
                              </div>
                        </div>
                  </div>
                  {{-- /.card --}}
                  <div class="card">
                        <div class="card-body">
                               <h4 class="">Pricing</h4>
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
                        <img class="img-fluid card-img-top artist-banner" src="{{asset('mkd_design/assets/img/banner.jpg')}}" alt="">

                        <div class="card-body">
                                    <div class="d-flex flex-row mt-2">
                                          <div class="about px-4 vertical-line">
                                                <h6>About</h6>
                                          </div>
                                          <div class="about px-4 vertical-line">
                                                <h6>Albums</h6>
                                          </div>
                                          <div class="about px-4 vertical-line">
                                                <h6>Write a review</h6>
                                          </div>
                                                      
                                    </div>

                        </div>


                  </div>
                  {{-- card --}}

                  <div class="card gallery mt-4">
                              <div class="row ">
                                    <div class="col-md-4">  
                                         <img class="img-fluid" src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}" alt="">
                                         
                                         <img class="img-fluid"  src="{{asset('mkd_design/assets/img/model.jpg')}}" alt="">


                                    </div>
                                    <div class="col-md-4">
                                          <img class="img-fluid"  src="{{asset('mkd_design/assets/img/model.jpg')}}" alt="">

                                          
                                    </div>
                                    <div class="col-md-4">
                                          <img class="img-fluid"  src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}" alt="">

                                          
                                    </div>
                  

                              </div>
                              <div class="row ">
                                          <div class="col-md-4">
                                                <img class="img-fluid"  src="{{asset('mkd_design/assets/img/banner.jpg')}}" alt="">
      
                                                
                                          </div>
                                          <div class="col-md-4">  
                                                      <img class="img-fluid"  src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}" alt="">
             
             
             
                                          </div>
       
                                          <div class="col-md-4">
                                                <img class="img-fluid"  src="{{asset('mkd_design/assets/img/banner.jpg')}}" alt="">
      
                                                
                                          </div>
                        
      
                                    </div>
                        
                  </div>
                  
            </div>
            {{-- /.col --}}

      </div>
      {{-- /.row --}}
</div>
{{-- /.container --}}








@endsection
