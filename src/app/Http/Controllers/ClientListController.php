<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientListController extends Controller
{
    public function index()
    {
        return view('client_list');
    }
}
