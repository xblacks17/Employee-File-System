<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employee';

    protected $fillable = [
        'full_name',
        'personal_email_address',
        'phone_number',
        'home_address',
        'dob',
        'next_of_kin',
        'dependents',
        'sex',
        'national_id',
        'company_id',
        'company_email_address',
        'position',
        'department',
        'start_date',
        'status',
        'attachment',
    ];    

}
