<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model {

    public $table = "clients";
    protected $fillable = ['id','client_name', 'phone', 'email'];

}
