<?php

namespace App\Http\Controllers\Users;

use App\Booking;
use App\Http\Controllers\Controller;
use App\Price;
use App\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function BookNow($user_name)
    {
        $makeup_type = Price::where('user_name',$user_name)->get();
        $artist = User::where('user_name',$user_name)->first();
        return view('mkd_design.pages.user.book-now',compact('artist','makeup_type'));
    }

    public function Booked(Request $request)
    {
        //store data in varriable
        $artist_user_name = $request->input('artist_user_name');
        $artist_name = $request->input('artist_name');
        $user_user_name = $request->input('user_user_name');
        $full_name = $request->input('full_name');
        $phone_number = $request->input('phone_number');
        $makeup_type = $request->input('makeup_type');
        $number_of_people = $request->input('number_of_people');
        $address = $request->input('address');
        $date = $request->input('date');
        $time = $request->input('time');
        $message = $request->input('message');
        $bookings_coupon = $artist_name.$full_name.time();
        $bookings_coupon = str_replace(' ','',$bookings_coupon);
        //Upload data to database
        $booking = new Booking();
        $booking->artist_user_name = $artist_user_name;
        $booking->user_user_name = $user_user_name;
        $booking->full_name = $full_name;
        $booking->phone_number = $phone_number;
        $booking->makeup_type = $makeup_type;
        $booking->number_of_people = $number_of_people;
        $booking->address = $address;
        $booking->date = $date;
        $booking->time = $time;
        $booking->message = $message;
        $booking->bookings_coupon = $bookings_coupon;
        $booking->bookings_status = "request";
        $booking->save();
        \Session::flash('message', "Booking has been Accepted, Wait for Artist's Response");
        \Session::flash('alert-class', 'alert-success');
        return redirect('/profile'.'/'.$artist_user_name);
    }

    public function UserCancel(Request $request , $user_name)
    {
        $artist_user_name = $request->input('artist_user_name');
        $user_user_name = $user_name;
        $booking = Booking::where('artist_user_name',$artist_user_name)
                            ->where('user_user_name',$user_user_name)
                            ->orderBy('id', 'desc')
                            ->first();
        if ($booking->bookings_status == "request") {
        $booking->bookings_status = "Ucanceled";
        }
        elseif ($booking->bookings_status == "cancel") {
        $booking->bookings_status = "Acanceled";
        }
        $booking->save();
        \Session::flash('message', "Booking has been Canceled");
        \Session::flash('alert-class', 'alert-danger');
        return redirect('/profile'.'/'.$artist_user_name);
    }
}
