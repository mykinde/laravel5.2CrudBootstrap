<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
         'lastname', 'firstname', 'middlename', 'email', 'staffidno', 'phone', 'gender', 'maritalstatus', 'country', 'stateoforigin', 'province', 'dateofbirth', 'dateemployed', 'qualification', 'religion', 'address', 'passport', 'duty', 'ipaddress', 'status', 'role',
        
    ];
}
