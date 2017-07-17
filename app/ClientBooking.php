<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientBooking extends Model {

    public $table = "client_booking";
    protected $fillable = ['id','name','wedding_package','wedding_location', 'amount_paid', 'org_id', 'client_id'];

    
    protected  $hidden = ['amount_owned'];
}
    