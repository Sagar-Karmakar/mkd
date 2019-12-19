<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Login;
use App\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /*
    Registration for all user
    Atirst & user..
    redirect to homepage
    and take session
    */
    //show registration page
    public function RegistrationIndex()
    {
        return view('mkd_design.pages.all.signup');
    }

    //post registration
    public function RegistrationSubmit(Request $request)
    {
        //Validate data
        $this->validate($request,
               [
                   'name' => 'required',
                   'email' => 'required|email|unique:users|unique:logins',
                   'account_type' => 'required',
                   'password' => 'required|confirmed|min:6',
               ]);
        //store data in varriable
        $name = $request->input('name');
        $email = $request->input('email');
        $account_type = $request->input('account_type');
        $user_name =$account_type."-".date('Ymd').$name.date('His');
        $password = Hash::make($request->input('password'));
        //Upload data to database
        $user = User::where("email", $email)->first();
        $login = Login::where("email", $email)->first();

        if (empty($user)|empty($login)) {
            $user = new User();
            $user->name = $name;
            $user->user_name = $user_name;
            $user->email = $email;
            $user->gender = "female";
            $user->profile_picture = "profile.png";
            $user->cover_picture = "cover.png";
            $user->account_type = $account_type;
            $user->save();
            $login = new Login();
            $login->user_name = $user_name;
            $login->email = $email;
            $login->password = $password;
            $login->save();
            \Session::flash('message', "Account has been created");
            \Session::flash('alert-class', 'alert-success');
            session(['name' => $name,'account_type' => $account_type,'email' => $email]);
            return redirect('/');
        }
        else{
            \Session::flash('message', "Sorry you can't create an Account \n
            Please try again or contact us");
            \Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
           }
    }

    /*
    In Homepage User Can Register
    just giving his name phone number
    */
    //Sign Up to get your perfect look
    public function UserRegister(Request $request)
    {
        # code...
    }
    /*
    Login For All User
    Artist and User..
    check type and redirect right page
    and take session
    */
    //show Login page
    public function LoginIndex()
    {
        return view('mkd_design.pages.all.login');
    }

    //post Login
    public function LoginSubmit(Request $request)
    {
        //Validate data

        //Login Logic
    }

    /*
    it's mainly for Artist
    who can edit her account's information
    only data
    */
    //show Edit account page
    public function EditAcccountIndex()
    {

    }

    //post Edit Acccount
    public function EditAcccountSubmit(Request $request)
    {
        //Validate data

        //EditAcccount Logic
    }

}
