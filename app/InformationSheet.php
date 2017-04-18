<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;

class InformationSheet extends Model
{
    use Notifiable;

    protected $guard = 'studentworker, admin, admissions, users';
    
    protected $dates = ['published_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'streetAddress', 'streetAddress2', 'city', 'state', 'zipcode', 'country', 'sex', 'phone', 'birthday', 'secondary_school', 'start_month', 'start_year', 'college_credit', 'college_name', 'primary_major', 'secondary_major', 'other_interest', 'hear_about_us', 'other_hear', 'contact'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function setPublishedAtAttribut($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    //public function user()
    //{
    //    return $this->belongsTo('APP\User');
    //}
}