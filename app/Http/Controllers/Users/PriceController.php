<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mkd_design.pages.artist.add-pricing');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_name = $request->user_name;
        if ($user_name === \Session::get('user_name')) {
            foreach ($price_name as $type) {
                # code...
            }
        }
        else {
            \Session::flash('message', "Sorry some error occured please contact us or try again");
            \Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function edit($price)
    {
        if ($price === \Session::get('user_name')) {
            $makeup = Price::where('user_name',$price)->first();
        return view('mkd_design.pages.artist.edit-pricing',compact('makeup','price'));
        }
        else {
            \Session::flash('message', "Sorry some error occured please contact us or try again");
            \Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price $price)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
        //
    }
}
