<?php

namespace App\Http\Controllers\Frontend\User;

use App\Source;
use App\Vehicle;
use App\Destination;
use App\DepartureLog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleDepartureController extends Controller
{
    public function index(Request $request, $vehicle_id)
    {
        $vehicles = Vehicle::find($vehicle_id);

        // Get current logged in company ID
        $companyId = $request->user()->company()->first()->id;

        // dd($companyId);
        $destinations = Destination::all();
        $sources = Source::all();

        return view('frontend.user.departure', compact('vehicles', 'destinations', 'sources'));
    }

    public function store(Request $request)
    {
        DepartureLog::create([
            'date'              => request('date'),
            'vehicle_id'        => request('vehicle_id'),
            'document_id'       => request('document_id'),
            'weight'            => request('weight'),
            'destination_id'    => request('destination_id'),
            'source_id'         => request('source_id'),
            'user_id'           => $request->user()->id
        ]);

        $this->updateVehicleStatus(request('vehicle_id'), 1);
        
        return redirect('/dashboard');
    }

    private function updateVehicleStatus($vehicle_id, $status)
    {
        Vehicle::where('id', $vehicle_id)
            ->update(['status' => $status]);
    }
}
