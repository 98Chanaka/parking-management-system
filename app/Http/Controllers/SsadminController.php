<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;


class SsadminController extends Controller
{
    public function SsadminDashboard(){
        
        $headers = [
            'client',
            'email',
            'phone',
            'register',
            'payment',
            'active_status',
        ];
        $dataArray= Client::all();
        $records = $dataArray->map(function ($client) {
            $clientData = [
              'client' => $client->client,
              'email' => $client->email,
              'phone' => $client->phone,
              'register' => $client->register,
              'payment' => $client->payment,
              'active_status' => $client->active_status,
            ];
            return $clientData;
          })->toArray();

          return view("ssadmin.clients", compact('headers', 'records'));
    } //end method

    public function SsadminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
