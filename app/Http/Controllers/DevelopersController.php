<?php

namespace App\Http\Controllers;

use App\Models\Developers;
use Illuminate\Http\Request;


class DevelopersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Developers::all();
        return view('crud', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Developers $developers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Developers $developers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Developers $developers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Developers $developers)
    {
        //
    }
}
