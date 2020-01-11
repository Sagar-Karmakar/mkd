@extends('mkd_design.layouts.mkd-layout')

@section('content')

<form action="{{route('social.login')}}" method="POST">
    @csrf
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
                        <input type="hidden" name="avatar" value="{{$user['avatar']}}">
                        <input type="hidden" name="name" value="{{$user['name']}}">
                        <input type="hidden" name="email" value="{{$user['email']}}">
                        <input type="hidden" name="provider" value="{{$user['provider']}}">
                        <input type="hidden" name="provider_id" value="{{$user['provider_id']}}">
                            <button type="submit" class="mt-3 btn mkd-btn text-white">Create Your Account</button>
                            <div>
                                        <small>By creating an account, you agree to Makeup Dunia's <a href="#">Terms & conditions</a>.
                                        </small>

                            </div>
</form>

@endsection
