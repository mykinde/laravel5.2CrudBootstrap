<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'studentid', 'lastname', 'firstname', 'middlename', 'gender', 'acaclass_id', 'country', 'stateoforigin', 'province', 'dateofbirth', 'religion',	'passport', 'status',	'paymentstatus', 'paymentrate', 'ptitle', 'plastname', 'pfirstname', 'pmiddlename', 'email', 'username', 'password', 'phone', 'altphone', 'pgender', 'relationship', 'occupation', 'maritalstatus', 'partnername', 'address', 'ppassport' 
        
    ];
}
