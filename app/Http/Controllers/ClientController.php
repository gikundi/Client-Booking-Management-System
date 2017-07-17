<?php

namespace App\Http\Controllers;

use Response;
use DB;
use Alert;
use Validator;
use Request;
use Maatwebsite\Excel\Facades\Excel;
use View;
use Auth;
use App\ClientBooking;
use App \Clients;
use App \Payments;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {


//        $clientbooking = DB::table('client_booking')
//                        ->join('clients', 'client_booking.id', '=', 'clients.id')
//                        ->select('clients.client_name', 'clients.phone', 'clients.email', 'client_booking.*')->get();
 $pending = ClientBooking::count();

        $clientbooking = ClientBooking::get();



        return view('clients.view')->with(array('clientbooking' => $clientbooking,'pend'=> $pending));
    }

    public function invoice_index() {




        $invoices =  ClientBooking::get();
        
  
                
        return view('clients.invoice_index')->with(array('invoices' => $invoices));
    }

    public function invoice_read($id) {

        $invoices = ClientBooking::where('id', '=', $id)->get();

        $amount_paid = DB::table('payments')->where('client_id', '=', $id)->sum('amount');

        $customer = ClientBooking::find($id);


        return view('clients.invoice_read')->with(array('invoices' => $invoices, 'customer' => $customer,
                    'amount_paid' => $amount_paid
        ));
    }

    public function delete_customer($id) {

        Alert::warning('Warning', 'Details To Be Deleted')->persistent("Continue");

        DB::table('client_booking')->where('id', '=', $id)->delete();

        $clientbooking = ClientBooking::get();

        return view('clients.view')->with(array('clientbooking' => $clientbooking));
    }

    public function downloadSummary() {

        Excel::create('Customer Booking', function($excel) {

            $excel->sheet('Excel sheet', function($sheet) {


                $clientbooking = DB::table('client_booking')
                                ->join('clients', 'client_booking.client_id', '=', 'clients.id')
                                ->select('clients.client_name', 'clients.phone', 'clients.email', 'client_booking.*')->get();

                $arr = array();
                foreach ($clientbooking as $clientbooking) {

                    $data = array($clientbooking->client_name, $clientbooking->phone, $clientbooking->email, $clientbooking->wedding_package, $clientbooking->wedding_date, $clientbooking->wedding_location
                    );
                    array_push($arr, $data);
                }

//set the titles
                $sheet->fromArray($arr, null, 'A1', false, false)->prependRow(array('NAME', 'PHONE', 'EMAIL',
                    'PACKAGE', 'DATE', 'LOCATION'
                        )
                );
            });
        })->export('xls');
    }

    public function invoice_print($id) {

        $invoices = ClientBooking::where('id', '=', $id)->get();

        $customer = ClientBooking::find($id);


        $payments = Payments::where('client_id', '=', $id)->get();



        $date1 = $payments[2]['created_at'];
        $paidby1 = $payments[1]['paid_by'];
        $mop1 = $payments[1]['mop'];
        $amount1 = $payments[1]['amount'];



        $amount_paid = DB::table('payments')->where('client_id', '=', $id)->sum('amount');


        $amount_owned = $customer->amount_owned - $amount_paid;


        return view('clients.invoice_print')->with(array('invoices' => $invoices, 'payments' => $payments, 'amount_paid' => $amount_paid, 'amount_owned' => $amount_owned, 'customer' => $customer, 'date' => date("m/d/y")
                    , 'date1' => $date1, 'paidby1' => $paidby1, 'mop1' => $mop1, 'amount1' => $amount1
        ));
    }

    public function add_payments() {


        return view('clients.add_payments');
    }

    /*     * Route::get('client.savepayments/{id})', 'ClientController@savePayments');_
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
     * @param  \Illuminate\Http\Request  $requestI
     * 

     */
    public function store(Request $request) {



        $validator = Validator::make($request->all(), [
                    'client_id' => 'required',
                    'amount' => 'required',
        ]);

      

        if ($validator->fails()) {


            Alert::error('Please fill in all the details', 'Oops!');

            return redirect('client.add_payments');
        }

        
        

        $payments = new Payments;
        
        $payments->client_id = $request->client_id;


        $payments->amount = $request->amount;
        
        $payments->mop = $request->payment;
        
        $payments->paid_by = $request->paid_by;

        $payments->save();



        Alert::success('Success', 'Payments were received successfully');

        return view('clients.add_payments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        $clients = ClientBooking::all();


        if (!$clients) {

            return Response::json([
                        'error' => [
                            'message' => 'Client not found'
                        ]
                            ], 404);
        }

        return Response::json([

                    'data' => $this->transform($clients)
                        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
//

        
         $book = ClientBooking::find($id);
         return view('clients.edit', compact('book'));
    }
    
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id) {
        
        $bookUpdate = Request::all();
        $book = ClientBooking::find($id);
        $book->update($bookUpdate);
        Alert::success('Update Successful', 'Details Were Updated');
        return view('clients.edit', compact('book'));
        
        
    }

    public function clientcount() {

        //$user = Auth::user()->name;
        // Alert::message('Welcome' . " " . $user);


        $pending = ClientBooking::count();
        $count = ClientBooking::count();


// return View::make('home')->withcustinfo($custcot);

        return View::make('home')->with(array('clientbooking' => $count, 'pend' => $pending));
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

    /**
     *
     * 
     * This is the Api section just to play around with laravel
     */
// Display all records in the database in json format

    public function displayClients() {

        $clientsinfo = ClientBooking::all();

        return Response::json($clientsinfo);
    }

//Display limited fields based on user preference


    public function displayBased($id) {


        $clientsinfo = ClientBooking::where('id', '=', $id)->get();

        return Response::json($clientsinfo);
    }

    public function save_payments($id) {

        $amount = Input::get('amount');


        DB::insert('insert into payments (client_id, amount) values (?, ?)', [$id, $amount]);



        return view('clients.add_payments');
    }

    public function transform($clients) {

        return array_map(function($clients) {

            return [
                'wedding_package' => $clients['wedding_package'],
                'wedding_location' => $clients['wedding_location'],
            ];
        }, $clients->toArray());
    }

}
