<?php

namespace App\Repository;

use App\Interface\ContactSupportInterface;
use App\Models\ContactSupport;

class ContactSupportRepository implements ContactSupportInterface
{
    public function store(array $data)
    {
        return ContactSupport::create($data);
    }

    // Get all contact support requests
    public function getAll()
    {
        return ContactSupport::all();
    }
}
