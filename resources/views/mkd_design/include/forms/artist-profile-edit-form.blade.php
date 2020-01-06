





<form action="/profile/{{$user->user_name}}" method="POST">
    @csrf
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputName">Name</label>
        <input type="text" name="name" class="form-control" id="inputName" value="{{$user->name}}" placeholder="Your Name">
        <p class="error-message">{{ $errors->first('name') }}</p>
    </div>

    <div class="form-group col-md-6">
    <label for="inputEmail4">Email</label>
    <input type="email" class="form-control" name="email" id="inputEmail4" value="{{$user->email}}" placeholder="Email">
    <p class="error-message">{{ $errors->first('email') }}</p>
</div>
</div>
<div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputNumber">Whatsapp Number</label>
            <input type="number" name="phone_number" class="form-control" id="inputNumber" value="{{$user->phone_number}}" placeholder="+91">
            <p class="error-message">{{ $errors->first('phone_number') }}</p>
        </div>


    <div class="form-group  col-md-3">
        <label for="sel1">Select Gender:</label>
        <select name="gender" class="form-control" id="sel1">
            <option value="female" {{$user->gender == 'female' ? 'selected="selected"' : ''}}>Female</option>
            <option value="male" {{$user->gender == 'male' ? 'selected="selected"' : ''}}>Male</option>
            <option value="transgender" {{$user->gender == 'transgender' ? 'selected="selected"' : ''}}>Transgender</option>
        </select>
        <p class="error-message">{{ $errors->first('gender') }}</p>
    </div>

    <div class="form-group col-md-6">
        <label for="inputNumber">Website</label>
        <input type="number" name="website" class="form-control" id="inputNumber" value="{{$user->website}}" placeholder="if you have own website">
        <p class="error-message">{{ $errors->first('website') }}</p>
    </div>


</div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputState">State</label>
            <select id="inputState" name="state" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
            <p class="error-message">{{ $errors->first('state') }}</p>
        </div>
        <div class="form-group col-md-4">
        <label for="inputState">City</label>
        <select id="inputState" name="city" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
        </select>
        <p class="error-message">{{ $errors->first('city') }}</p>
        </div>
        <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" name="zip" id="inputZip" value="{{$user->zip}}">
        <p class="error-message">{{ $errors->first('zip') }}</p>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputAddress2">Products you are Using</label>
            <input type="text" class="form-control" name="product_info" id="inputAbout" value="{{$user->product_info}}">
            <p class="error-message">{{ $errors->first('product_info') }}</p>
        </div>
        <div class="form-group col-md-4">
            <label for="inputAddress2">Degree</label>
            <input type="text" class="form-control" name="degree" id="inputDegree" value="{{$user->degree}}" placeholder="Makeup degree(if any)">
            <p class="error-message">{{ $errors->first('degree') }}</p>
        </div>
        <div class="form-group col-md-2">
            <label for="inputexperience">Work Experience</label>
            <input type="number" name="work_experience" class="form-control" id="inputExperience" value="{{$user->work_experience}}" placeholder="1 yr">
            <p class="error-message">{{ $errors->first('work_experience') }}</p>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="comment">Areas You can reach for makeup customers </label>
            <textarea class="form-control" rows="2" id="comment" name="prefer_area" value="{{$user->prefer_area}}" placeholder=" eg: behala, taratola, ruby"></textarea>        </div>
            <p class="error-message">{{ $errors->first('prefer_area') }}</p>
            <div class="form-group col-md-6">
            <label for="comment">About Yourself</label>
            <textarea class="form-control" rows="2" id="areas" name="about" value="{{$user->about}}" placeholder="Write what describes you the most"></textarea>
            <p class="error-message">{{ $errors->first('about') }}</p>
        </div>

    </div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
