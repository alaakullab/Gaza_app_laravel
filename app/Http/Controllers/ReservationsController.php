<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Reservations as Reservations;

class ReservationsController extends Controller
{
    //

    public function bookRoom($client_id, $room_id, $date_in, $date_out)
    {
    	$reservations = new Reservations();
    	$client_instance = new Client();
    	$room_instance = new Room();

    	$reservations->date_in = $date_in;
    	$reservations->date_out = $date_out;

    	$client = $client_instance->find($client_id);
    	$room = $room_instance->find($room_id);

    	$reservations->room()->associate($room);
    	$reservations->client()->associate($client);

    	$reservations->save();

    	return redirect()->route('clients');

      	//return view('reservations/bookRoom');
    }
}
