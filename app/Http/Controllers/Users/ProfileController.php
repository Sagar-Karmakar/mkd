<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('account_type', 'artist')->get();
        return view('mkd_design.pages.artist.artist-showcase',compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_name)
    {
        $user = User::where('user_name', $user_name)->first();
        $user_name = \Session::get('user_name');
        return view('mkd_design.pages.artist.artist-profile',compact('user','user_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_name)
    {
        if (\Session::get('user_name') === $user_name) {
            $user = User::where('user_name', $user_name)->first();
            return view('mkd_design.pages.artist.edit-profile',compact('user'));
        }
        else {
            \Session::flash('message', "Sorry you can't Access this URL");
            \Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_name)
    {
        //Validate data
        $this->validate($request,
            [
            'name' => 'required|min:6',
            'email' => 'nullable|email|unique:users,email,'.$user_name . ',user_name|unique:logins,email,'.$user_name . ',user_name',
            'phone_number' => 'integer|nullable|unique:users,phone_number,'.$user_name . ',user_name',
            'gender' => 'required',
            'website' => 'nullable',
            'state' => 'nullable',
            'city' => 'nullable',
            'zip' => 'nullable',
            'product_info' => 'nullable',
            'degree' => 'nullable',
            'work_experience' => 'nullable',
            'prefer_area' => 'nullable',
            'about' => 'nullable',
            ]);
        //store data in varriable
            $name = $request->input('name');
            $email = $request->input('email');
            $phone_number = $request->input('phone_number');
            $gender = $request->input('gender');
            $website = $request->input('website');
            $state = $request->input('state');
            $city = $request->input('city');
            $zip = $request->input('zip');
            $product_info = $request->input('product_info');
            $degree = $request->input('degree');
            $work_experience = $request->input('work_experience');
            $prefer_area = $request->input('prefer_area');
            $about = $request->input('about');
        //Upload data to database
        $user = User::where("user_name", $user_name)->first();
            $user->name = $name;
            $user->email = $email;
            $user->phone_number = $phone_number;
            $user->gender = $gender;
            $user->website = $website;
            $user->state = $state;
            $user->city = $city;
            $user->zip = $zip;
            $user->product_info = $product_info;
            $user->degree = $degree;
            $user->work_experience = $work_experience;
            $user->prefer_area = $prefer_area;
            $user->about = $about;
            $user->save();
        \Session::flash('message', "Account has been updated");
        \Session::flash('alert-class', 'alert-success');
        if (is_null($user->provider)) {
            $login = Login::where('user_name', $user_name)->first();
            $login->email = $email;
            $login->save();
        }
        return $this->show($user_name);
    }

    public function ProfilePic(Request $request, $user_name)
    {
        $this->validate($request, [
        'photo'  => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $user = User::where('user_name', $user_name)->first();
        if ($user_name === \Session::get('user_name')) {
            if ($request->file('photo')->isValid()) {
                $extension = $request->photo->extension();
                $name=time() . '.' .$extension;
                $directory = 'public/artist/'.$user_name.'/'.'profile_picture/';
                    if(!is_dir($directory)){Storage::makeDirectory($directory);}
                $request->photo->storeAs($directory, $name);
                $dp = 'storage/artist/'.$user_name.'/'.'profile_picture/'.$name;
            }
            else {
                \Session::flash('message', "Sorry your photo is not validate");
                \Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
            $user->profile_picture = $dp;
            $user->save();
        }
        return redirect()->back();
    }

    public function Coverpic(Request $request, $user_name)
    {
        return redirect()->back();
    }
}
