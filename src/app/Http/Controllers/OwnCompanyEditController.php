<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnCompanyEditController extends Controller
{
    public function index()
    {   
        return view('own_company_edit');
    }
    public function save()
    {   
        $validatedParam = $request->only([
            'company_name',
            'email',
            'name_stamp_image_path'
        ]);
        return view('own_company_edit');
    }
}
