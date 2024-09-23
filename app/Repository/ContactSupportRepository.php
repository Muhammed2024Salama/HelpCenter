<?php

namespace App\Repository;

use App\Interface\ContactSupportInterface;
use App\Mail\SimpleMail;
use App\Models\ContactSupport;
use Illuminate\Support\Facades\Mail;

class ContactSupportRepository implements ContactSupportInterface
{

    public function getAll()
    {
        return ContactSupport::all();
    }

    public function store(array $data)
    {
        // Send the email
        Mail::to($data['email'])->send(new SimpleMail($data['email'], $data['question']));

        // Save data to the database after sending the email
        $contact = ContactSupport::create([
            'email' => $data['email'],
            'question' => $data['question']
        ]);

        return 'Email has been sent successfully and contact support record has been created!';
    }
}
