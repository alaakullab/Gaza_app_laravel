<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Room extends Model
{
    //

    public function getAvailabelrooms($start_date, $end_date)
    {
    	$available_rooms = DB::table('rooms as r')
    								->select('r.id', 'r.name')
    								->whereRow("
    									r.id NOT IN (
    										select b.room_id FROM reservations b
    										WHERE NOT(
    										b.date_out < '{$start_date}' OR
    										b.date_in > '{$end_date}'
    									) 
    									")
    								->orderBy('r.id')
    								->get()
    	;
    	return $available_rooms;
    }
}
