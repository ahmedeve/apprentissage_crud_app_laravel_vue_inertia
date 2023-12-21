<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Inertia\Inertia;

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
        $data = $request->validate([
            'name' => 'string|max:255',
            'specialization' => 'string|max:255'
            ]);
        Doctor::create($data);
        return Inertia::location(route('doctors.index'));
    }
}
