<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Input;
class Booking extends Model
{
    //
    protected $table="booking_users";

    public static function bookstore($data){
    	// echo "Here model is";

    	// var_dump($data);

    	$name=Input::get('name');
    	// echo $username." ",
    	$email=Input::get('email');
    	// echo $fullname." ",
    	$service=Input::get('service');
    	// echo $contact." ",
    	$date=Input::get('date');
    	// echo $email." ",
    	$users= new Booking();

		$users->name=$name;   
		$users->email=$email;   
		$users->service=$service;   
		$users->date=$date;   
			
		$users->save();
    }
}
