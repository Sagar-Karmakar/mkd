@extends('mkd_design.layouts.mkd-layout')
@section('content')


<div class="container-fluid ">
      <div class="card signup-centered-card">
            <div class="card-body">
                <form method="POST" action="{{route('login.submit')}}">
                    {{csrf_field()}}
                        <h5 class="mkd-text">Welcome Back !</h5>
                        <hr>


                        <div class="form-group">
                          <label for="mkdInputEmail">Email address</label>
                          <input type="email" class="form-control" id="mkdInputEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                          <label for="mkdInputPassword">Password</label>
                          <input type="password" class="form-control" id="mkdInputPassword" placeholder="Password" required>
                        </div>


                        <button type="submit" class="mt-2 px-3 btn mkd-btn text-white">Login</button>

                      </form>

                      <p class="mt-2"><a href="#">Forget Password?</a></p>

                      <hr>

                      <p>Don't have any account? <a href="{{route('register.index')}}">Sign Up</a></p>

            </div>
      </div>
</div>



@endsection
