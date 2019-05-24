<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    protected $primaryKey = 'adm_no'; // or null

    public $incrementing = false;
}
