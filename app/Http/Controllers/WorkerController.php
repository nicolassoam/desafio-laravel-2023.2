<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $worker = new Worker();
        $worker->name = $request->name;
        $worker->email = $request->email;
        $worker->password = password_hash($request->password, PASSWORD_DEFAULT);
        $worker->address = $request->address;
        $worker->date_of_birth = $request->date_of_birth;
        $worker->phone_number = $request->phone_number;
        $worker->work_period = $request->work_period;
        $worker->role = 'employee';
        $worker->profile_picture = $request->profile_picture;
        $worker->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
