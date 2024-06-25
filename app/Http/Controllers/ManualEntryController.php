<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManualEntry;

class ManualEntryController extends Controller
{
    /**
     * Show the manual entry form.
     */
    public function ManualEntry() {
        return view("sadmin.manual_entry");
    } // end method

    /**
     * Show the manual exit form.
     */
    public function ManualExit() {
        return view("sadmin.manual_exit");
    } // end method

    /**
     * Store a new manual entry in the database.
     */
    public function store(Request $request) {
        $request->validate([
            'entryExit' => 'required|string',
            'vehicle_number' => 'required|string|max:255',
            'spot_id' => 'required|string|max:255',
        ]);

        $entry = new ManualEntry;
        $entry->client = 'example_client'; // Replace with actual client logic if needed
        $entry->vehicle_number = $request->vehicle_number;
        $entry->slot = $request->spot_id;
        $entry->gate = $request->entryExit === 'enter' ? 'enter_gate' : 'exit_gate';
        $entry->save();

        return redirect()->back()->with('success', 'Entry recorded successfully!');
    } // end method

    /**
     * Store a new manual exit in the database.
     */
    public function storeExit(Request $request) {
        $request->validate([
            'vehicle_number' => 'required|string|max:255',
        ]);

        $exit = new ManualEntry;
        $exit->client = 'example_client'; // Replace with actual client logic if needed
        $exit->vehicle_number = $request->vehicle_number;
        $exit->slot = null; // Assuming no slot is needed for exit
        $exit->gate = 'exit_gate'; // Example logic
        $exit->save();

        return redirect()->back()->with('success', 'Exit recorded successfully!');
    } // end method
}
