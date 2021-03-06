@extends('mkd_design.layouts.mkd-layout')
@section('content')


<div class="container-fluid ">
        <div class="card signup-centered-card">
                <div class="card-body">
                    {{-- session message --}}
                    @if(Session::has('message'))
                    <p class="alert {{Session::get('alert-class')}}">{{ Session::get('message') }}</p>
                    @endif
                    {{-- session message --}}
                    <form method="POST" action="{{route('login.submit')}}">
                        @csrf
                            <h5 class="mkd-text">Welcome Back !</h5>
                            <hr>


                            <div class="form-group">
                            <label for="mkdInputEmail">Email address</label>
                            <input type="email" class="form-control" id="mkdInputEmail" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <p class="error-message">{{ $errors->first('email') }}</p>
                            </div>
                            <div class="form-group">
                            <label for="mkdInputPassword">Password</label>
                            <input type="password" class="form-control" id="mkdInputPassword" name="password" placeholder="Password" required>
                            <p class="error-message">{{ $errors->first('password') }}</p>
                            </div>


                            <button type="submit" class="mt-2 px-3 btn btn-block mkd-btn text-white">Login</button>
                        </form>

                        {{--  <a class="mt-2"><a href="#">Forget Password?</a></a>  --}}



                            <p class="text-center text-muted my-2">------------Or-----------</p>

                            <a href="{{ url('/auth/redirect/facebook') }}">
                                <button class="mt-2 px-3 btn btn-block loginBtn loginBtn--facebook text-white">
                                    <i class="fab fa-facebook-f text-white mr-2"></i> Login with Facebook
                                </button>
                            </a>

                            <a href="{{ url('/auth/redirect/google') }}">
                                <button class="mt-2 px-3 btn btn-block loginBtn loginBtn--google text-white">
                                    <i class="fab fa-google text-white mr-2"></i> Login with Google
                                </button>
                            </a>
                        <hr>

                        <p>Don't have any account? <a href="{{route('register.index')}}">Sign Up</a></p>

                </div>
        </div>
</div>



@endsection
