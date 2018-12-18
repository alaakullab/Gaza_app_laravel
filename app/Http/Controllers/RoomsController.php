<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    //

	public function checkAvailableRooms($client_id, Request $request)
	{
			$dateForm = $request->input('dateForm');
			$dateTo = $request->input('dateTo');
			$client = New Client();
			$room = New Room();

			$data = [];
			$data['dateForm'] = $dateForm;
			$data['dateTo'] = $dateTo;
			$data['room'] = $room->getAvailableRooms($dateForm, $dateTo);
			$data['client'] = $client->find($client_id);

		  	return view('rooms/checkAvailableRooms');
	}
}
