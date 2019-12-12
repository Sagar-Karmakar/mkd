@extends('mkd_design.layouts.mkd-layout')
@section('content')



<div class="container-fluid ">
            <div class="card signup-centered-card">
                  <div class="card-body">
                        <h5 class="mkd-text">Change Password</h5>
                        <hr>
      
                        @include('mkd_design.include.forms.change-password-form')
                  </div>
            </div>
</div>



@endsection