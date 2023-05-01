<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $app = new Patient();

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:15',
            'dob' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'nid' => 'required',
            'address' => 'required',
        ], [
            'name.required' => 'Patient name required.',
            'name.min' => 'Patient name minimum 3 character required.',
            'name.max' => 'Patient name maximum 15 character required.',
            'mobile.required' => 'Phone number required.',
            'mobile.min' => 'Phone number must be 11 digit.',
            'mobile.max' => 'Phone number must be 11 digit.',
            'appDate.required' => 'Appointment date required.',
            'serial.required' => 'Serial number required.',
            'dep.required' => 'Department required.',
            'doctor.required' => 'Doctor required.',
            'status.required' => 'Status required.'
        ]);

        if ($validator->fails()) {
        } else {
            $app->name = $request->name;
            $app->phone = $request->mobile;
            $app->date = $request->appDate;
            $app->serial = $request->serial;
            $app->dep = $request->dep;
            $app->doctor = $request->doctor;
            $app->status = $request->status;
            $app->app_id = uniqid().time();

            $app->save();

            return response()->json([
                'status' => 1,
                'success' => 'Appointment added successfully'
            ]);
        }
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
