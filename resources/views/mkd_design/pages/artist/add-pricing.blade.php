@extends('mkd_design.layouts.mkd-layout')
@section('content')



<div class="container-fluid ">
            <div class="card big-centered-card">
                  <div class="card-body">
                        <h5 class="mkd-text ml-3">Edit Pricing</h5>
                        <hr class="ml-3">

                        @include('mkd_design.include.forms.artist-pricing-add-form')
                  </div>
            </div>
</div>



@endsection
