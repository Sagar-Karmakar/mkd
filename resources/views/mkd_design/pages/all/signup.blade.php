@extends('mkd_design.layouts.mkd-layout')
@section('content')


<div class="container-fluid ">
        <div class="card signup-centered-card">
                <div class="card-body">
                    <form method="POST" action="{{route('register.submit')}}">
                        {{csrf_field()}}
                            <h5 class="mkd-text">Create Your Account</h5>
                            <hr>
                            <div class="form-group">
                            <label for="mkdInputName">Your Name</label>
                            <input type="text" name="name" class="form-control" id="mkdInputname" aria-describedby="nameHelp" placeholder="Enter name" value="{{ old('name') }}" required>
                            <p class="error-message">{{ $errors->first('name') }}</p>
                            </div>

                            <div class="form-group">
                            <label for="mkdInputEmail">Email address</label>
                            <input type="email" name="email" class="form-control" id="mkdInputEmail" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}" required>
                            <p class="error-message">{{ $errors->first('email') }}</p>
                            </div>
                            <div class="form-group">
                            <label for="mkdInputPassword">Password</label>
                            <input type="password" name="password" class="form-control" id="mkdInputPassword" placeholder="Password" required>
                            <p class="error-message">{{ $errors->first('password') }}</p>
                            </div>
                            <div class="form-group">
                            <label for="mkdInputPassword"> Re-Type Your Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="mkdInputPassword" placeholder=" Reapeat Password" required>
                            </div>
                            <div class="checkUsertype">


                                {{-- select artist or use --}}
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="account_type" id="inlineRadio1" value="artist">
                                <label class="form-check-label" for="inlineRadio1">Artist</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="account_type" id="inlineRadio2" value="user">
                                <label class="form-check-label" for="inlineRadio2">User</label>
                                </div>
                            <p class="error-message">{{ $errors->first('account_type') }}</p>
                            </div>


                            <button type="submit" class="mt-3 btn mkd-btn text-white">Create Your Account</button>
                            <div>
                                        <small>By creating an account, you agree to Makeup Dunia's <a href="#">Terms & conditions</a>.
                                        </small>

                            </div>
                        </form>

                        <hr>

                        <p>Already have an account? <a href="{{ route('login.index') }}">Login</a></p>
                </div>
        </div>
</div>

@endsection
