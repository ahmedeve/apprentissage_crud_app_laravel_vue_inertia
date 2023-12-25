<?php

namespace App\Http\Controllers;

use App\Http\Controllers\User\UserController;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{

    public function index()
    {
        $doctors = Doctor::all();
        return Inertia::render('Doctor/Index', ['doctors' => $doctors]);
    }

    public function create()
    {
        return Inertia::render('Doctor/Create');
    }

    public function show($doctor_id)
    {
        $doctor = Doctor::find($doctor_id);
        return Inertia::render('Doctor/Show', ['doctor' => $doctor]);
    }

    public function store(Request $request )
    {
        $user = UserController::store($request);
        $data = $request->validate([
            'name' => 'string|max:255',
            'specialization' => 'string|max:255'
            ]);
        $data['user_id'] = $user->id;
        $doctor = Doctor::create($data);
        return Inertia::render('Doctor/Show', [
                                'doctor' => $doctor,
                                ]);
    }
}
