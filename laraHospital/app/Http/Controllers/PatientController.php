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

        $validator = $request->validate([
            'name' => 'required|min:3|max:15',
            'dob' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'nid' => 'required',
            'address' => 'required',

            'b_group' => 'required',
            'height' => 'required',
            'width' => 'required',
            'bp' => 'required',
            'pulse' => 'required',
            'temp' => 'required',
            
            'sym_title' => 'required',
            'sym_type' => 'required',
            'casualty' => 'required',
            'dep' => 'required',
            'doctor' => 'required',
            'patient_type' => 'required',
            'ad_date' => 'required',
            'bed_group' => 'required',
            'bed_number' => 'required',
            'report' => 'required',
        ], [
            'name.required' => 'Patient name required.',
            'name.min' => 'Patient name minimum 3 character required.',
            'name.max' => 'Patient name maximum 15 character required.',
            'dob.required' => 'Date of birth required.',
            'gender.required' => 'Gender required.',
            'phone.required' => 'Phone number required.',
            'email.required' => 'Email required.',
            'nid.required' => 'NID card required.',
            'address.required' => 'Patient address required.',

            'b_group.required' => 'Blood group required.',
            'height.required' => 'Height required.',
            'width.required' => 'Width required.',
            'bp.required' => 'Blood pressure required.',
            'pulse.required' => 'Pulse required.',
            'temp.required' => 'Temperature required.',
            
            'sym_title.required' => 'Symptoms title required.',
            'sym_type.required' => 'Symptoms type required.',
            'casualty.required' => 'Casualty required.',
            'dep.required' => 'Department required.',
            'doctor.required' => 'Doctor required.',
            'patient_type.required' => 'Patient type required.',
            'ad_date.required' => 'Admit date required.',
            'bed_group.required' => 'Bed group required.',
            'bed_number.required' => 'Bed number required.',
            'doctor.required' => 'Doctor required.',
            'report.required' => 'Report required.',
        ]);

        if ($validator->passes()) {
            /* $app->name = $request->name;
            $app->phone = $request->mobile;
            $app->date = $request->appDate;
            $app->serial = $request->serial;
            $app->dep = $request->dep;
            $app->doctor = $request->doctor;
            $app->status = $request->status;
            $app->app_id = uniqid().time();

            $app->save(); */
        }else {
            /* return $validator->errors(); */
        }

        return view('patient-add');
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
