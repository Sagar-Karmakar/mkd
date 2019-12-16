@extends('mkd_design.layouts.mkd-layout')
@section('content')



<div class="container-fluid ">
    <div class="card big-centered-card">
          <div class="card-body">
                <h5 class="mkd-text">Bookings</h5>
                <hr>
                

                {{-- //Pendings --}}
                  <div class="alert alert-success">
                    <strong>Pending</strong> Bookings
                  </div>

                  <div class="card">
                      <div class="card-body">


                         <div class="d-flex flex-row">
                             {{-- client image --}}
                             <div class="client-img">
                                <img src="{{asset('mkd_design/assets/images/logo/favicon.png')}}" alt="logo of Make up dunia" width="45" height="45">
                             </div>
                             <div class="client-name">
                                <h6 class="mkd-text mt-2">
                                    Sagar Karmakar
                                </h6>
                             </div>


                         </div>
                         {{-- flex --}}

                         {{-- location --}}
                         <div class="location ml-2">
                            <p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>Behala, Kolkata</span>
                            </p>
                         </div>

                         {{-- date --}}
                         <div class="date ml-2">
                            <p class="font-weight-bold">
                                Date

                            </p>
                         </div>

                         <div class="d-flex flex-row ml-2">
                            <div class="makeup-type mr-4">
                                <p>Bridal Make Up</p>

                            </div>
                            <div class="persons-number ml-4">
                                <p>Person : <span>3</span> </p>
                            </div>
                         </div>

                         <div class="d-flex flex-row ml-2">
                             <div class="accept">
                                <a href="#" class="btn btn-sm mkd-btn  mr-4"> Accept </i></a>


                             </div>
                             <div class="cancel">
                                 <a href="#" class="btn btn-sm btn-outline-danger"> Cancel <i class="fas fa-times"></i></a>

                             </div>
                         </div>

                      </div>
                      {{-- card body --}}

                  </div>
                  {{-- individual card --}}


                  <div class="card">
                    <div class="card-body">


                       <div class="d-flex flex-row">
                           {{-- client image --}}
                           <div class="client-img">
                              <img src="{{asset('mkd_design/assets/images/logo/favicon.png')}}" alt="logo of Make up dunia" width="45" height="45">
                           </div>
                           <div class="client-name">
                              <h6 class="mkd-text mt-2">
                                  Sagar Karmakar
                              </h6>
                           </div>


                       </div>
                       {{-- flex --}}

                       <div class="location ml-2">
                          <p>
                              <i class="fa fa-map-marker" aria-hidden="true"></i>
                              <span>Behala, Kolkata</span>
                          </p>
                       </div>
                       <div class="date ml-2">
                        <p class="font-weight-bold">
                            Date

                        </p>
                     </div>
                       <div class="d-flex flex-row ml-2">
                          <div class="makeup-type mr-4">
                              <p>Bridal Make Up</p>

                          </div>
                          <div class="persons-number ml-4">
                              <p>Person : <span>3</span> </p>
                          </div>
                       </div>

                       <div class="d-flex flex-row ml-2">
                           <div class="accept">
                              <a href="#" class="btn btn-sm mkd-btn  mr-4"> Accept </i></a>


                           </div>
                           <div class="cancel">
                               <a href="#" class="btn btn-sm btn-outline-danger"> Cancel <i class="fas fa-times"></i></a>

                           </div>
                       </div>

                    </div>
                    {{-- card body --}}

                </div>
                {{-- individual card --}}




                  {{-- //Accepted --}}
                  <div class="alert alert-success">
                    <strong>Accepted</strong> Bookings
                  </div>


                  <div class="card">
                    <div class="card-body">


                       <div class="d-flex flex-row">
                           {{-- client image --}}
                           <div class="client-img">
                              <img src="{{asset('mkd_design/assets/images/logo/favicon.png')}}" alt="logo of Make up dunia" width="45" height="45">
                           </div>
                           <div class="client-name">
                              <h6 class="mkd-text mt-2">
                                  Sagar Karmakar
                              </h6>
                           </div>


                       </div>
                       {{-- flex --}}

                       {{-- location --}}
                       <div class="location ml-2">
                          <p>
                              <i class="fa fa-map-marker" aria-hidden="true"></i>
                              <span>Behala, Kolkata</span>
                          </p>
                       </div>

                       {{-- date --}}
                       <div class="date ml-2">
                          <p class="font-weight-bold">
                              Date

                          </p>
                       </div>

                       <div class="d-flex flex-row ml-2">
                          <div class="makeup-type mr-4">
                              <p>Bridal Make Up</p>

                          </div>
                          <div class="persons-number ml-4">
                              <p>Person : <span>3</span> </p>
                          </div>
                       </div>

                       <div class="d-flex flex-row ml-2">
                           <div class="accept">
                              <a href="#" class="btn btn-sm mkd-btn  mr-4"> Messege </i></a>


                           </div>

                       </div>

                    </div>
                    {{-- card body --}}

                </div>
                {{-- individual card --}}

          </div>
    </div>
</div>


@endsection
