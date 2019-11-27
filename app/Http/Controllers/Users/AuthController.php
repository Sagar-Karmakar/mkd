<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    }

    //post registration
    public function RegistrationSubmit(Request $request)
    {
        //Validate data

        //Upload data to database
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
