<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use App\Models\HomePageSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactSubmissionController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:3000'],
        ]);

        ContactSubmission::create($validated);

        $message = HomePageSetting::singleton()->contact_success_message
            ?: HomePageSetting::defaults()['contact_success_message'];

        return redirect('/#contactos')->with('contact_success', $message);
    }
}
