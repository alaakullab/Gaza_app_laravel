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
    	return __METHOD__;
    }

    public function newClient()
    {
    	return __METHOD__;
    }

    public function create()
    {
    	return __METHOD__;
    }

}
