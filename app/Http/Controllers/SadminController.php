<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParkingSlot;

class SadminController extends Controller
{
    // Method to show the dashboard
    public function SadminDashboard()
    {
        // Retrieve all parking slots
        $parkingSlots = ParkingSlot::all();

        // Counting A Pass, E Pass, F Pass
        $countA = ParkingSlot::where('vehicle_class', 'A')->count();
        $countE = ParkingSlot::where('vehicle_class', 'E')->count();
        $countF = ParkingSlot::where('vehicle_class', 'F')->count();

        // Counting Total Blocked
        $countBlocked = ParkingSlot::where('Status', 'Blocked')->count();

        // Counting Total Available
        $countAvailable = ParkingSlot::where('availability', 'yes')->count();

        // Counting Total Parked (Example, replace with actual logic if needed)
        $countParked = 50;

        // Pass data to the view
        return view('sadmin.parking_map', compact('parkingSlots', 'countA', 'countE', 'countF', 'countBlocked', 'countAvailable', 'countParked'));
    }

    // Method to show the add parking slot form
    public function showAddParkingSlot()
    {
        return view('sadmin.parking_map_add');
    }

    // Method to handle storing parking slot
    public function store(Request $request)
{
    // Validation
    $validatedData = $request->validate([
        'Sport_ID' => 'required|string|max:10',
        'Status' => 'required|string',
        'availability' => 'required|in:yes,no',
        'category' => 'required|in:long,light',
        'class' => 'required|in:A,E,F',
    ]);

    // Create a new ParkingSlot instance with validated data
    $parkingSlot = new ParkingSlot();
    $parkingSlot->client = $request->input('client', 'default_client'); // Provide a default value if necessary
    $parkingSlot->Sport_ID = $validatedData['Sport_ID'];
    $parkingSlot->Status = $validatedData['Status'];
    $parkingSlot->availability = $validatedData['availability'];
    $parkingSlot->vehicle_category = $validatedData['category'];
    $parkingSlot->vehicle_class = $validatedData['class'];
    $parkingSlot->save();

    // Redirect to the parking map page with success message
    return redirect()->route('sadmin.dashboard')->with('success', 'Parking slot created successfully!');
}


    // Method to show the parking map
    public function ParkingMap()
    {
        // Retrieve and count data again if needed, or just return the view
        return $this->SadminDashboard();
    }

    // Method to show the form for creating a new resource
    public function create()
    {
        return view('sadmin.parking_map_add');
    }

    // Method to handle searching and filtering parking slots
    public function index(Request $request)
    {
        $query = ParkingSlot::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('Status', 'like', "%{$search}%")
                  ->orWhere('Sport_ID', 'like', "%{$search}%")
                  ->orWhere('availability', 'like', "%{$search}%")
                  ->orWhere('vehicle_category', 'like', "%{$search}%")
                  ->orWhere('vehicle_class', 'like', "%{$search}%");
        }

        $parkingSlots = $query->get();

        // Counting A Pass, E Pass, F Pass
        $countA = $parkingSlots->where('vehicle_class', 'A')->count();
        $countE = $parkingSlots->where('vehicle_class', 'E')->count();
        $countF = $parkingSlots->where('vehicle_class', 'F')->count();

        // Counting Total Blocked
        $countBlocked = $parkingSlots->where('Status', 'Blocked')->count();

        // Counting Total Available
        $countAvailable = $parkingSlots->where('availability', 'yes')->count();

        // Counting Total Parked (Example, replace with actual logic if needed)
        $countParked = 50;
        $countAvailable= 23;

        return view('sadmin.parking_map', compact('parkingSlots', 'countA', 'countE', 'countF', 'countBlocked', 'countAvailable', 'countParked'));
    }

    // Method to show the edit form for a parking slot
    public function edit($id)
    {
        $parkingSlot = ParkingSlot::find($id);

        if (!$parkingSlot) {
            return redirect()->route('sadmin.dashboard')->with('error', 'Parking slot not found.');
        }

        return view('sadmin.parking_map_edit', compact('parkingSlot'));
    }

    // Method to update a parking slot
    public function update(Request $request, $id)
    {
        $request->validate([
            'Sport_ID' => 'required|string|max:255',
            'Status' => 'required|string|max:255',
            'availability' => 'required|string|in:yes,no',
            'category' => 'required|string|in:long,light',
            'class' => 'required|string|in:A,E,F',
        ]);

        $parkingSlot = ParkingSlot::findOrFail($id);
        $parkingSlot->update([
            'Sport_ID' => $request->Sport_ID,
            'Status' => $request->Status,
            'availability' => $request->availability,
            'vehicle_category' => $request->category,
            'vehicle_class' => $request->class,
        ]);

        return redirect()->route('sadmin.parking_map')->with('success', 'Parking slot updated successfully');
    }

    // Method to delete a parking slot
    public function destroy($id)
    {
        $parkingSlot = ParkingSlot::findOrFail($id);
        $parkingSlot->delete();

        return redirect()->route('sadmin.dashboard')->with('success', 'Parking slot deleted successfully');
    }
}

