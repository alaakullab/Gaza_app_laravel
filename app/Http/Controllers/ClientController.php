<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title as Title;

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
    
    public function index()
    {
    	return view('client/index');
    }

    public function newClient()
    {
    	return view('client/newClient');
    }
 
    public function create()
    {
    	return view('client/create');
    }

    public function show($client_id)
    {
    	return view('client/show');
    }

}
