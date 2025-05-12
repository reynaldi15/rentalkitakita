<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function edit()
    {
        $contact = Contact::first(); // Ambil data pertama (asumsi hanya 1)
        return view('contacts.index', compact('contact'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'contactNumber' => 'nullable|string',
            'rekeningNumber' => 'nullable|string',
            'nasabahName' => 'nullable|string',
            'waLink' => 'nullable|string',
            'about' => 'nullable|string',
            'email' => 'nullable|email',
            'instagram' => 'nullable|string',
            'address' => 'nullable|string',
        ]);

        $contact = Contact::firstOrCreate([]);
        $contact->update($validated);

        return redirect()->back()->with('success', 'Kontak berhasil diperbarui.');
    }
}
