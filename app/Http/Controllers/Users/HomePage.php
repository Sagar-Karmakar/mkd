<?php

namespace App\Http\Controllers\Users;

use App\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use App\Price;
use App\User;
use Illuminate\Support\Facades\DB;

class HomePage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $variable = User::where('account_type',"artist")->inRandomOrder()->limit(8)->get();

        foreach ($variable as $key) {

        $artists[] = [
            'user_name' => $key->user_name,
            'name' => $key->name,
            'profile_picture' => $key->profile_picture,
            $price = Price::where('user_name',$key->user_name)->get(),
            'price' => $price->min('price'),
            'makeup_type' => $price,
            $star = Booking::where('artist_user_name',$key->user_name)->get(),
            'star' => $star->sum('star'),
            'count' => $star->count('star'),

        ];

        }

        $images = Image::inRandomOrder()->limit(8)->get('image');
                
        return view('mkd_design.pages.all.homepage',compact('artists','images'));
    }
}
