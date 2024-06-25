<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Realtimevehicle;

class VehicleHistoryController extends Controller
{
    public function VehicleHistory(Request $request)
    {
        $headers2 = [
            'client',
            'vehicle number',
            'enter time',
            'exit time',
        ];

        $query = Realtimevehicle::query();

        // Apply filters based on request parameters
        if ($request->filled('date')) {
            $query->whereDate('updated_at', $request->date);
        }
        if ($request->filled('vehicle_number')) {
            $query->where('vehicle_number', $request->vehicle_number);
        }

        $dataArray = $query->get()->groupBy('vehicle_number');

        $records2 = $dataArray->map(function ($vehicleGroup) {
            // Initialize variables to store enter and exit times
            $enterTime = null;
            $exitTime = null;

            foreach ($vehicleGroup as $realtimeVehicle) {
                if ($realtimeVehicle->gate == 'in') {
                    $enterTime = $realtimeVehicle->updated_at;
                }
                if ($realtimeVehicle->gate == 'out') {
                    $exitTime = $realtimeVehicle->updated_at;
                }
            }

            // Create the record for each vehicle
            $vehicleHistoryData = [
                'client' => $vehicleGroup->first()->client,
                'vehicle number' => $vehicleGroup->first()->vehicle_number,
                'enter time' => $enterTime,
                'exit time' => $exitTime,
            ];

            return $vehicleHistoryData;
        })->values()->toArray();

        return view("ssadmin.vehicle_history", compact('headers2', 'records2'));
    }
}
