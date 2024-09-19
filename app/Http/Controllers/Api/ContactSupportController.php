<?php

namespace App\Http\Controllers\Api;

use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactSupportRequest;
use App\Interface\ContactSupportInterface;
use Illuminate\Support\Facades\Mail;


class ContactSupportController extends Controller
{
    protected $contactSupportRepository;

    public function __construct(ContactSupportInterface $contactSupportRepository)
    {
        $this->contactSupportRepository = $contactSupportRepository;
    }

    public function index()
    {
        $data = $this->contactSupportRepository->getAll();
        return ResponseHelper::success('success', 'Data fetched successfully', $data);
    }

    public function store(ContactSupportRequest $request)
    {

        $contactSupport = $this->contactSupportRepository->store($request->validated());
        return ResponseHelper::success('success', 'Contact request sent successfully', $contactSupport, 201);

    }
}
