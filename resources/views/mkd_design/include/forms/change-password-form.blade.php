<form action="{{route('update.pass')}}" method="POST">
@csrf
<input type="hidden" name="user_name" value="{{Session::get('user_name')}}">

            <div class="form-group">
                <label for="mkdInputEmail">Old address</label>
                <input type="password" class="form-control" id="mkdInputPassword" placeholder="Old Password" name="oldPassword" required>
            </div>
            <div class="form-group">
                <label for="mkdInputPassword"> Confirm Old Password</label>
                <input type="password" class="form-control" id="mkdInputPassword" name="oldPassword_confirmation" placeholder="Password" required>
                <p class="error-message">{{ $errors->first('oldPassword') }}</p>
            </div>
            <div class="form-group">
                <label for="mkdInputPassword">Enter New Password</label>
                <input type="password" class="form-control" id="mkdInputPassword" name="password" placeholder="New Password" required>
                <p class="error-message">{{ $errors->first('password') }}</p>
            </div>

            <button type="submit" class="mt-2 px-3 btn mkd-btn text-white">Submit</button>

</form>
