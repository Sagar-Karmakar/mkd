@extends('mkd_design.layouts.mkd-layout')
@section('content')

{{-- <div id="preloader">
      <div id="status">&nbsp; </div>
</div> --}}

@include('mkd_design.include.bars.navbar')


            <!-- hero banner -->

            <div class="container-fluid main-page-banner text-left mb-4">
            
               <div class="heading-action">
               <div class="banner-heading text-white">
                        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <!-- <hr class="white-hr"> -->
                     <h6 class="text-left">We offer professional-grade, self-paced courses to help developers stay on top of their craft.</h6>
               </div>
               <!-- /.heading -->
               <div class="buttons">
                  <a href="#" class="btn text-white mt-4 mr-3 mkd-btn mkd-btn-active">BROWSES</a>
                     
               </div>
               <!-- /.buttons -->

            </div>
            <!-- /.heading-action -->

            </div>
            <!-- /.container-fluid -->

            <!-- Showcase artist -->

            <div class="container-fluid showcase-artists mb-4">
                  <div class="showcase-heading text-left my-4">
                        <h3 class="mb-3">Join a global cohort of <strong>4000+ students</strong> </h3>
                        <!-- <hr> -->
                        <div class="clearfix">
                              <div class="float-left">
                              <h6>Students in our classes are Engineers at:</h6>
                              </div>
                              <div class="float-right">
                              <span class="badge badge-success">View more</span>

                              </div>
                        </div>
                        <!-- /.clearfix -->
                  </div>
                  <!-- /.heading -->

                  {{-- artis booking row started --}}

                  <div class="artist-img row mb-4">
                     <div class="col-md-3">
                      <div class="card mkd-card">
                      
                        
                         <img class="img-responsive" class="card-img-top" src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}" alt="">
                         <div class="card-footer mkd-card-footer">
                              <p class="p-0">Artist : <span><a href="#">Arpita Manna</a></span></p>
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
                              <a href="#"><p class="text-center mt-1"><i class="far fa-eye"></i> Visit profile</p></a>
                            </div>
                            <!-- /.card-footer -->
                         
                      </div>
                      <!-- /.card --> 
                     </div>
                     <!-- /.col -->
                  
                     <div class="col-md-3">
                     <div class="card mkd-card ">
                      
                        
                         <img class="img-responsive" class="card-img-top" src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}"  class="img-responsive"  alt="">
                      
                         <div class="card-footer mkd-card-footer">
                              <p class="p-0">Artist : <span><a href="#">Arpita Manna</a></span></p>
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
                              <a href="#"><p class="text-center mt-1"><i class="far fa-eye"></i> Visit profile</p></a>
                            </div>
                            <!-- /.card-footer -->
   
                      </div>
                      <!-- /.card --> 

                     </div>
                     <!-- /.col -->
                  
                     <div class="col-md-3">
                     <div class="card mkd-card">
                      
                        
                         <img class="img-responsive"  class="card-img-top"  src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}" class=" img-responsive"  alt="">
                         <div class="card-footer mkd-card-footer">
                              <p class="p-0">Artist : <span><a href="#">Arpita Manna</a></span></p>
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
                              <a href="#"><p class="text-center mt-1"><i class="far fa-eye"></i> Visit profile</p></a>
                            </div>
                            <!-- /.card-footer -->
   
                      </div>
                      <!-- /.card --> 

                     </div>
                     <!-- /.col -->
                  
                     <div class="col-md-3">
                     <div class="card mkd-card">
                      
                        
                         <img class="img-responsive" class="card-img-top"  src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}" class=" img-responsive"  alt="">
                        
                         <div class="card-footer mkd-card-footer">
                           <p class="p-0">Artist : <span><a href="#">Arpita Manna</a></span></p>
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
                           <a href="#"><p class="text-center mt-1"><i class="far fa-eye"></i> Visit profile</p></a>
                         </div>
                         <!-- /.card-footer -->

                      </div>
                      <!-- /.card --> 

                     </div>
                  <!-- /.col -->

                  </div>
                  <!-- /.artist-img row-->

                  {{-- 2nd ROW started --}}

                  <div class="artist-img row mt-4">
                              <div class="col-md-3">
                              <div class="card mkd-card">
                              
                              
                              <img class="img-responsive" class="card-img-top" src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}" alt="">
                              <div class="card-footer mkd-card-footer">
                                    <p class="p-0">Artist : <span><a href="#">Arpita Manna</a></span></p>
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
                                    
                                      <a href="#" class="px-4 btn btn-block mt-2 btn-sm mkd-btn text-white">Book Now</></a>

                                         
                                    {{-- visit profile --}}
                                     <a href="#"><p class="text-center mt-1"><i class="far fa-eye"></i> Visit profile</p></a>

                                         


                                    </div>
                                    <!-- /.card-footer -->
                              
                              </div>
                              <!-- /.card --> 
                              </div>
                              <!-- /.col -->
                        
                              <div class="col-md-3">
                              <div class="card mkd-card ">
                              
                              
                              <img class="img-responsive" class="card-img-top" src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}"  class="img-responsive"  alt="">
                              
                              <div class="card-footer mkd-card-footer">
                                    <p class="p-0">Artist : <span><a href="#">Arpita Manna</a></span></p>
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
                                    <a href="#"><p class="text-center mt-1"><i class="far fa-eye"></i> Visit profile</p></a>
                                    </div>
                                    <!-- /.card-footer -->

                              </div>
                              <!-- /.card --> 

                              </div>
                              <!-- /.col -->
                        
                              <div class="col-md-3">
                              <div class="card mkd-card">
                              
                              
                              <img class="img-responsive"  class="card-img-top"  src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}" class=" img-responsive"  alt="">
                              <div class="card-footer mkd-card-footer">
                                    <p class="p-0">Artist : <span><a href="#">Arpita Manna</a></span></p>
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
                                    <a href="#"><p class="text-center mt-1"><i class="far fa-eye"></i> Visit profile</p></a>
                                    </div>
                                    <!-- /.card-footer -->

                              </div>
                              <!-- /.card --> 

                              </div>
                              <!-- /.col -->
                        
                              <div class="col-md-3">
                              <div class="card mkd-card">
                              
                              
                              <img class="img-responsive" class="card-img-top"  src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}" class=" img-responsive"  alt="">
                              
                              <div class="card-footer mkd-card-footer">
                                    <p class="p-0">Artist : <span><a href="#">Arpita Manna</a></span></p>
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
                                    <a href="#"><p class="text-center mt-1"><i class="far fa-eye"></i> Visit profile</p></a>
                              </div>
                              <!-- /.card-footer -->

                              </div>
                              <!-- /.card --> 

                              </div>
                        <!-- /.col -->

                  </div>
                  <!-- /.artist-img row-->
                  {{-- go to artists list --}}
                  <div class="more-button text-center my-4">
                        <a href="#" class="btn px-4 mkd-btn-inactive">View More <i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>

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
                        
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, alias.</span>
                        </h4>
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
                   </li>
                   <li>
                         <a href="#" class="btn  mkd-btn-inactive  mt-3 ">View More</a>
                   </li>

              </ul>

           </div>
           <!-- /.col -->

           <div class="col-md-2"></div>

           <div class="col-md-4 ">
            
                  {{-- sign Up --}}
                  <div class="card mkd-card p-4">
                        <h4 class="mkd-text">Sign Up to get your perfect look</h4>
                        <form action="">
                                    
                              <div class="form-group">
                                   
                                    <input type="email" class="form-control"  placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                              </div>
                               <div class="form-group">
                                         
                                          <input type="number" class="form-control" id="number" placeholder="Phone number">
                              </div>
                              <div class="form-group">
                                    
                                    <input type="password" class="form-control"  placeholder="Password">
                              </div>
                              <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                              </div>
                              <button type="submit" class="btn mkd-btn text-white btn-block mt-1">Submit</button>
                              
                        </form>
                  </div>

           </div>
           <!-- /.col -->


      </div>
     <!-- /.row -->
     
</div>
<!-- /.container-fluid -->
<!-- User benefit End -->

      {{-- Showcase area --}}

      <div class="container-fluid showcase-area">
            <div class="row mb-4">
                  <div class="col-md-3">
                        <img class="img-responsive" src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}" alt="">
                        <div class="carousel-caption mt-3">
                                    <p>Example headline.</p>
                                  </div>
    
                  </div>
                  <div class="col-md-3">
                        <img class="img-responsive" src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}" alt="">
      
                  </div>
                  <div class="col-md-3">
                        <img class="img-responsive" src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}" alt="">
      
                  </div>
                  <div class="col-md-3">
                        <img class="img-responsive" src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}" alt="">
      
                  </div>
               
            
      
            </div>
            <div class="row">
                        <div class="col-md-3">
                              <img class="img-responsive" src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}" alt="">
          
                        </div>
                        <div class="col-md-3">
                              <img class="img-responsive" src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}" alt="">
            
                        </div>
                        <div class="col-md-3">
                              <img class="img-responsive" src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}" alt="">
            
                        </div>
                        <div class="col-md-3 hovereffect">
                              <img class="img-responsive" src="{{asset('mkd_design/assets/img/adult-attractive-beautiful-457701.jpg')}}" alt="">
                              <div class="overlay">
                                          <h2>Effect 10</h2>
                                          
                                      </div>
            
                        </div>
                     
                  
            
                  
            </div>
            {{-- /.row --}}
      </div>
      {{-- /.Showcase area --}}


@endsection