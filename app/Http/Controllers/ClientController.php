<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{

    public function RegisterClient()
    {
        return view('ssadmin.register_client');
    }

    public function create()
    {
        return view('ssadmin.register_client');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'phone' => 'nullable|string|max:20',
            'available_classes' => 'nullable|string|max:255',
            'register' => 'required|in:yes,no',
            'payment' => 'required|in:yes,no',
            'active_status' => 'required|in:yes,no',
        ]);

        Client::create($validated);

        return redirect()->route('register_client')->with('success', 'Client registered successfully!');
    }
}
