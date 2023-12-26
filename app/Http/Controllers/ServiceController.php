<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Service;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return Inertia::render('Service/Index', [
                'servives' => $services
                ]);
    }

    public function show($service_id)
    {
        $service = Service::find($service_id);
        return Inertia::render('Service/Show', [
                'service' => $service
                ]);
    }

    public function create()
    {
        return Inertia::render('Service/Create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
                'name' => 'string|max:255|required',
                'doctor_name' => 'string|max:255|required',
                ]);
        // $doctor_name = $data['doctor_name'];
        // $doctor = Doctor::where('name', '=', $doctor_name)->first();
        // dd(auth()->user()->id === $doctor->id);
        $data['doctor_id'] = auth()->user()->id;

        $service = Service::create($data);
        return Inertia::location(route('services.show', [
                'service_id' => $service->id
                ]));
    }

    //
}
