<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformationSheet extends Model
{
    use Notifiable;

    protected $guard = 'studentworker, admin, admissions, users';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'streetAddress', 'streetAddress2', 'city', 'state', 'zipcode', 'country', 'sex', 'phone', 'birthday', 'email', 'secondary_school', 'start_month', 'start_year', 'college_credit', 'college_name', 'primary_major', 'secondary_major', 'other_interest', 'hear_about_us', 'other_hear', 'contact' ,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}