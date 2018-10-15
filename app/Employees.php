<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    //
    protected $table = "Employees";

    protected $fillable = [
        'First_name', 'Last_name', 'email', 'phone'
    ];
}
