<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminDetails extends Model
{
    protected $primaryKey = 'staff_id'; // or null

    public $incrementing = false;
}
