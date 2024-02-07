<?php

namespace App\Http\Controllers;

use App\Models\userChoise;
use App\Http\Requests\StoreuserChoiseRequest;
use App\Http\Requests\UpdateuserChoiseRequest;
use Inertia\Inertia;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class userChoiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Inertia::render('test-decrire-first', [
        //     'user_choises' => userChoise::all()
        // ]);
        $user_choises = userChoise::all();

        return inertia('test-decrire-first', compact('user_choises'));

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
    public function store(StoreuserChoiseRequest $request)
    {
        $uniqueId = Str::uuid();
        //dump($uniqueId);
        //dd($request->input('first'));

        userChoise::create([
        'userUniqueIdphp' => $uniqueId,
        'firstChoise' => $request->input('first')['_value']
        ]);

        //return response()->json(['message' => 'Data stored successfully', 'newRow' => $newRow]);
    }



    /**
     * Display the specified resource.
     */
    public function show(userChoise $userChoise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(userChoise $userChoise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateuserChoiseRequest $request, userChoise $userChoise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(userChoise $userChoise)
    {
        //
    }
}
