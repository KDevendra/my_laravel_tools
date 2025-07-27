<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $agent = new Agent();

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'ip_address' => $request->ip(),
            'browser' => $agent->browser(),
            'device' => $agent->device(),
            'os' => $agent->platform(),
            'created_by' => null, 
            'updated_by' => null,
        ]);

        return response()->json(['message' => 'Thank you for your message! We will get back to you soon.']);
    }
}
