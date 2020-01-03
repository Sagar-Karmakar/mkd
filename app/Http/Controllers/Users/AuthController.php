<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Login;
use App\User;
use Validator,Redirect,Response,File;
use Socialite;
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
            'name' => 'required|min:6',
            'email' => 'required|email|unique:users|unique:logins',
            'account_type' => 'required',
            'password' => 'required|confirmed|min:6',
            ]);
        //store data in varriable
        $name = $request->input('name');
        $email = $request->input('email');
        $account_type = $request->input('account_type');
        $user_name =$account_type."-".date('Ymd').$name.date('His');
        $user_name = str_replace(' ','',$user_name);
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
            session(['name' => $name,'account_type' => $account_type,'profile_picture' => $user->profile_picture]);
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
        //Validate data
        $this->validate($request,
            [
            'name' => 'required|min:6',
            'email' => 'required|email|unique:users|unique:logins',
            'password' => 'required|confirmed|min:6',
            ]);
        //store data in varriable
        $name = $request->input('name');
        $email = $request->input('email');
        $account_type = "user";
        $user_name ="user-".date('Ymd').$name.date('His');
        $user_name = str_replace(' ','',$user_name);
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
            session(['name' => $name,'account_type' => $account_type,'profile_picture' => $user->profile_picture]);
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
        $this->validate($request,
        [
        'email' => 'required|email',
        'password' => 'required|min:6',
        ]);
        //Login Logic
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        $user = User::where("email", $email)->first();
        $login = Login::where("email", $email)->first();
        if (empty($login)) {
            \Session::flash('message', "Sorry this email id is not connect with any account,\nplease create a new account use sign up button");
            \Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }
        else{
            if ($login->password == $password) {
                \Session::flash('message', "You Are successfully login");
                \Session::flash('alert-class', 'alert-success');
                session(['name' => $user->name,'account_type' => $user->account_type,'profile_picture' => $user->profile_picture]);
                return redirect('/');
            }
            else {
                \Session::flash('message', "Sorry you enter wrong Password");
                \Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        }
    }

    // Social Login
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $getInfo = Socialite::driver($provider)->stateless()->user();
        $user = User::where('provider_id', $getInfo->id)->first();
        $user_data = [
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'provider' => $provider,
                'provider_id' => $getInfo->id,
            ];
            if (empty($user)) {
                return view("mkd_design.include.forms.select-type-social-login")->with('user',$user_data);
            }
            else{
                \Session::flash('message', "You Are successfully login");
                \Session::flash('alert-class', 'alert-success');
                session(['name' => $user->name,'account_type' => $user->account_type,'profile_picture' => $user->profile_picture]);
                return redirect('/');
            }
    }

    public function SocialLogin(Request $request)
    {
        //Validate data
        $this->validate($request,['account_type' => 'required']);
        //store data in varriable
        $name = $request->input('name');
        $email = $request->input('email');
        $provider = $request->input('provider');
        $provider_id= $request->input('provider_id');
        $account_type = $request->input('account_type');
        $user_name =$account_type."-".date('Ymd').$name.date('His');
        $user_name = str_replace(' ','',$user_name);
        //Upload data to database
        $user = User::where('provider_id', $provider_id)->first();
        if (empty($user)) {
            $user = new User();
            $user->name = $name;
            $user->user_name = $user_name;
            $user->email = $email;
            $user->provider = $provider;
            $user->provider_id = $provider_id;
            $user->gender = "female";
            $user->profile_picture = "profile.png";
            $user->cover_picture = "cover.png";
            $user->account_type = $account_type;
            $user->save();
            \Session::flash('message', "Account has been created");
            \Session::flash('alert-class', 'alert-success');
            session(['name' => $name,'account_type' => $account_type,'profile_picture' => $user->profile_picture]);
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
