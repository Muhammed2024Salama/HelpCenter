<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactSupportRequest;
use App\Interface\ContactSupportInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactSupportController extends Controller
{
    protected $contactSupportRepo;

    public function __construct(ContactSupportRepositoryInterface $contactSupportRepo)
    {
        $this->contactSupportRepo = $contactSupportRepo;
    }

    // Store a new contact support request
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'question' => 'required|string|max:1000',
        ]);

        // Store the contact support data
        $contact = $this->contactSupportRepo->store($validated);

        // Send email to support
        Mail::raw($validated['question'], function ($message) use ($validated) {
            $message->to(env('SUPPORT_EMAIL'))
                ->subject('New Support Request')
                ->from($validated['email']);
        });

        return response()->json(['message' => 'Support request submitted successfully!'], 201);
    }

    // Get a list of all contact support requests
    public function index()
    {
        $contacts = $this->contactSupportRepo->getAll();
        return response()->json($contacts);
    }
}
