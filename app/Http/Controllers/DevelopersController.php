<?php

namespace App\Http\Controllers;

use App\Models\Developers;
use Illuminate\Http\Request;
use App\Http\Requests\DevelopersRequest;


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
    public function store(DevelopersRequest $request) : RedirectResponse
    {
       $newUser = Developers::create($request->validated());

        // $newUser = Developers::insert($request->validated());

        // $newUser = new Developers;
        // $newUser->name = $request->get('name');
        // $newUser->title = $request->get('title');
        // $newUser->email = $request->get('email');
        // $newUser->role = $request->get('role');
        // $newUser->save();

        // $newUser = new Developers;
        // $newUser->name = $request->input('name');
        // $newUser->title = $request->input('title');
        // $newUser->email = $request->input('email');
        // $newUser->role = $request->input('role');
        // $newUser->save();


        // $newUser = Developers::create([
        //     'name' => $request->name,
        //     'title' => $request->title,
        //     'email' => $request->email,
        //     'role' => $request->role,
        // ]);


       $data = Developers::all();

       return redirect()->back()->with(['data' , $data]);
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
    public function edit(Developers $developers, $id)
    {
        $user = Developers::find($id);
        return view('form', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DevelopersRequest $request, Developers $developers)
    {
        $data = Developers::findOrFail($request->user_id)->update($request->validated());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $requests, $id)
    {
        $user = Developers::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }
}
