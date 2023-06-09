<?php

namespace App\Http\Controllers;

use App\Models\Details;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('details.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        extract($request->all());
        // dd($fullname, $email, $address, $phone);
        Details::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Details $details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Details $details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Details $details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Details $details)
    {
        //
    }
}
