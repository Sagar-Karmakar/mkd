@extends('mkd_design.layouts.mkd-layout')
@section('content')


<div class="container-fluid ">
      <div class="card signup-centered-card">
            <div class="card-body">
                  <form>
                        <h5 class="mkd-text">Create Your Account</h5>
                        <hr>
                        <div class="form-group">
                           <label for="mkdInputName">Your Name</label>
                          <input type="text" class="form-control" id="mkdInputname" aria-describedby="nameHelp" placeholder="Enter name" required>
                          
                        </div>
                
                        <div class="form-group">
                          <label for="mkdInputEmail">Email address</label>
                          <input type="email" class="form-control" id="mkdInputEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                          <label for="mkdInputPassword">Password</label>
                          <input type="password" class="form-control" id="mkdInputPassword" placeholder="Password" required>
                        </div>
                        <div class="checkUsertype">

                       
                              {{-- select artist or use --}}
                              <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="artistoruser" id="inlineRadio1" value="artist">
                              <label class="form-check-label" for="inlineRadio1">Artist</label>
                              </div>
                              <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="artistoruser" id="inlineRadio2" value="user">
                              <label class="form-check-label" for="inlineRadio2">User</label>
                              </div>
                        </div>      
                        

                        <button type="submit" class="mt-3 btn mkd-btn text-white">Create Your Account</button>
                        <div>
                                    <small>By creating an account, you agree to Mankeup Dunia's <a href="#">Terms & conditions</a>.
                                    </small>
      
                        </div>
                      </form>

                      <hr>

                      <p>Already have an account? <a href="/all/login">Login</a></p>
            </div>
      </div>
</div>



@endsection