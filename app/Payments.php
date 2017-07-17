<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model {

    public $table = "payments";
    protected $fillable = ['id', 'client_id', 'amount'];

}
