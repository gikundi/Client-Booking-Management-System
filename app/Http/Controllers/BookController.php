<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ClientBooking;
use Validator;
use App \Payments;
use App\Http\Requests;
use Alert;
use App\Http\Controllers\Controller;

class BookController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
                    'name' => 'required',
                    'email' => 'required',
                    'wedding_date' => 'required',
                    'phone' => 'required',
        ]);

        if ($validator->fails()) {


            Alert::error('Please fill in all the details', 'Oops!');

            return redirect('book');
        }



        $booking = new ClientBooking;
        
        
        $booking->name = $request->name;


        $booking->phone = $request->phone; 
        
        $booking->email = $request->email;
        
        
         $booking->wedding_package = 'Video';
         
         
         $booking->amount_owned = 150000;
        
   
        $booking->wedding_date = $request->wedding_date;

 
        $booking->wedding_location = $request->wedding_location;
        
        $booking->phone = $request->phone;

        $booking->save();



        Alert::success('Success', 'Details Submmitted successfully');

        return view('booking');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
