<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnCompanyEditController extends Controller
{
    public function index()
    {   
        $user = Auth::user();
        return view('own_company_edit', compact('user'));
    }
    public function save(Request $request)
    {   
        $request->validate([
            'company_name' => 'required|max:255',
            'email' => 'required|max:255|email:strict,dns,spoof',
        ]);

        $validatedParam = $request->only([
            'company_name',
            'email',
            'name_stamp_image_path'
        ]);

        $user = Auth::user();
        $user->name = $validatedParam['company_name'];
        $user->email = $validatedParam['email'];
        $user->name_stamp_image_path = $validatedParam['name_stamp_image_path'];
        $user->save();

        return view('own_company_edit');
    }
}
