<?php

namespace App\Http\Controllers;

use App\Http\Controllers\User\UserController;
use App\Models\Patient;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return Inertia::render('Patient/Index', [
                                'patients' => $patients
                                ]);
    }

    public function show($patient_id)
    {
        $patient = Patient::find($patient_id);
        return Inertia::render('Patient/Show', [
                                'patient' => $patient
                                ]);
    }

    public function store(Request $request)
    {
        $user = UserController::store($request);
        $data = $request->validate([
            'name' => 'string|max:255',
            ]);
        $data['user_id'] = $user->id;
        $patient = Patient::create($data);
        Auth::login($user);
        return Inertia::render('Patient/Show', [
                                'patient' => $patient,
                                ]);
    }

}
