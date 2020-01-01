@extends('mkd_design.layouts.mkd-layout')
@section('content')



<div class="container-fluid ">
            <div class="card big-centered-card">
                    <div class="card-body">
                        <h5 class="mkd-text">Edit Profile</h5>
                        <hr>

                        @include('mkd_design.include.forms.artist-profile-edit-form')
                    </div>
            </div>
</div>



@endsection



