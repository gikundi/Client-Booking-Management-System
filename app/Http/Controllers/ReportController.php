<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App \Payments;
use Maatwebsite\Excel\Facades\Excel;
use App\ClientBooking;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReportController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    
    
    public function index() {

        $clientbooking = ClientBooking::all();

        return view('reports.payments')->with(array('clientbooking' => $clientbooking));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $categories = \DB::table('payments')->lists('id');
        return view('reports.payments')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $breakdown = new Payments;

        $breakdown->client_id = $request->client_id;


        $who = $breakdown['client_id'];


        $name = ClientBooking::where('id', '=', $who)->get();


        $client_name = $name[0]['name'];


        $payments = Payments::where('client_id', '=', $who)->get();


        return view('reports.payments_details')->with(array('payments' => $payments, 'client_name' => $client_name,'who'=>$who));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
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

    public function paymentsHistory($id) {
        

        Excel::create('Payments History', function($excel) use($id) {

            $excel->sheet('Excel sheet', function($sheet) use ($id){


                $payments = Payments::where('client_id', '=', $id)->get();

                $arr = array();
                foreach ($payments as $payments) {


                    $data = array($payments->created_at, $payments->paid_by, $payments->mop, $payments->amount
                    );
                    array_push($arr, $data);
                }

//set the titles
                $sheet->fromArray($arr, null, 'A1', false, false)->prependRow(array('DATE', 'PAID', 'PAYMENT MODE',
                    'AMOUNT'
                        )
                );
            });
        })->export('xls');
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

    public function displayPayments($id) {


        print_r($id);

        die();


        $payments = Payments::where('id', '=', $id)->get();


        return view('reports.payments_details')->with(array('payments' => $payments));
    }

}
