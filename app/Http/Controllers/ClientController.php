<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
        public function __construct( Title $titles )
    {
    	$this->titles = $titles->all();
    }

    public function di()
    {
    	dd($this->titles);
    }
}
