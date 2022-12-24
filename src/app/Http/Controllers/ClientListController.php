<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientListController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $clients = DB::table('client_companies')
            ->where('user_id', '=', $user->id)
            ->get();
        return view('client_list', compact('clients'));
    }
}
