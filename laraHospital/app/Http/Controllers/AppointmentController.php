<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $app = new Appointment();
        $data = $app::paginate(10);

        return view('appointment', with(["data" => $data]));
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
        $app = new Appointment();

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:15',
            'mobile' => 'required|min:11|max:11',
            'appDate' => 'required',
            'serial' => 'required',
            'dep' => 'required',
            'doctor' => 'required',
            'status' => 'required',
        ], [
            'name.required' => 'Appointment name required.',
            'name.min' => 'Appointment name minimum 3 character required.',
            'name.max' => 'Appointment name maximum 15 character required.',
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
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()->toArray()
            ]);
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
    public function edit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:15',
            'mobile' => 'required|min:11|max:11',
            'appDate' => 'required',
            'serial' => 'required',
            'dep' => 'required',
            'doctor' => 'required',
            'status' => 'required',
        ], [
            'name.required' => 'Appointment name required.',
            'name.min' => 'Appointment name minimum 3 character required.',
            'name.max' => 'Appointment name maximum 15 character required.',
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
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()->toArray()
            ]);
        } else {
            $app = new Appointment();

            $data = $app::where('app_id', $request->appID)->update([
                "name" => $request->name,
                "phone" => $request->mobile,
                "date" => $request->appDate,
                "serial" => $request->serial,
                "dep" => $request->dep,
                "doctor" => $request->doctor,
                "status" => $request->status
            ]);

            return response()->json([
                'status' => 1,
                'success' => "Appointment updated successfully"
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $app = new Appointment();

        $id = $request->id;
        $data = $app::where('app_id', $id)->get();

        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
