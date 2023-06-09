<?php

namespace App\Http\Controllers;

use App\Models\Details;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function create()
    {
        return view('details.create');
    }

    public function store(Request $request)
    {
        extract($request->all());
        // dd($fullname, $email, $address, $phone);
        return view('resume', compact('fullname','email','address','phone',));
        // $pdf = \PDF::loadView('resume', compact('fullname','email','address','phone',));
        // return $pdf->download('resume.pdf');
    }
}
