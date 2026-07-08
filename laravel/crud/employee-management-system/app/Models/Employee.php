<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['full_name','email', 'phone_number', 'department', 'position', 'salary', 'joining_date','address'];
}
