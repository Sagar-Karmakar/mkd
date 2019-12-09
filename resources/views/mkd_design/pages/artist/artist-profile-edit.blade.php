@extends('mkd_design.layouts.mkd-layout')
@section('content')


<div class="container-fluid my-4 mkd-artist-profile">
      <div class="card">
      <div class="card-body">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link " href="#profile" role="tab" data-toggle="tab">Profile Edit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#password" role="tab" data-toggle="tab">Change Password</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#pricing" role="tab" data-toggle="tab">Add Pricing</a>
            </li>
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade" id="profile">@include('mkd_design.include.forms.artist-profile-edit-form')</div>
              <div role="tabpanel" class="tab-pane fade" id="password"><div class="container-fluid ">
                <div class="card password-change mt-3">
                      <div class="card-body">
                           @include('mkd_design/include/forms/changePassword-form')
                      </div>
                </div>
          </div></div>
            <div role="tabpanel" class="tab-pane fade in active" id="pricing">@include('mkd_design.include.forms.artist-pricing-edit-form')</div>


          </div>
      </div>
      </div>
      {{-- /.card --}}
</div>
{{-- /.container --}}








@endsection