<?php

namespace App\Http\Controllers;

use App\Models\Appointement;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class AppointementController extends Controller
{

    public function index()
    {
        $appointement = Appointement::all();
        return Inertia::render('Appointement/Index', [
                                'appointements' => $appointement
                                ]);
    }

    public function create()
    {
        return Inertia::render('Appointement/Create');
    }

    public function show($appointement_id)
    {
        $appointement = Appointement::find($appointement_id);
        return Inertia::render('Appointement/Show', [
                                'appointement' => $appointement
                                ]);
    }

    public function debugstore(Request $request)
    {
        $data = $request->validate([
                'name' => 'string|max:255',
                'specialization' => 'string|max:255',
                'service_name' => 'string|max:255',
                'rendez_vous_date' => 'date',
            ]);
        dd($data);
        return Inertia::render('Appointement/Show', [
                                'appointement' => $data
                                ]);
    }


}
