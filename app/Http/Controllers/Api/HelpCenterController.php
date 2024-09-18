<?php

namespace App\Http\Controllers\Api;

use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHelpCenterRequest;
use App\Interface\HelpCenterInterface;
use Illuminate\Http\Request;

class HelpCenterController extends Controller
{
    protected $helpCenterRepository;

    public function __construct(HelpCenterInterface $helpCenterRepository)
    {
        $this->helpCenterRepository = $helpCenterRepository;
    }

    public function index()
    {
        $helpCenters = $this->helpCenterRepository->getAllHelpCenters();
        return ResponseHelper::success('success', 'Help Centers retrieved successfully', $helpCenters);
    }

    public function store(StoreHelpCenterRequest $request)
    {
        $helpCenter = $this->helpCenterRepository->createHelpCenter($request->validated());
        return ResponseHelper::success('success', 'Help Center created successfully', $helpCenter);
    }

    public function show($id)
    {
        $helpCenter = $this->helpCenterRepository->getHelpCenterById($id);
        return ResponseHelper::success('success', 'Help Center retrieved successfully', $helpCenter);
    }

    public function update(StoreHelpCenterRequest $request, $id)
    {
        $helpCenter = $this->helpCenterRepository->updateHelpCenter($id, $request->validated());
        return ResponseHelper::success('success', 'Help Center updated successfully', $helpCenter);
    }

    public function destroy($id)
    {
        $this->helpCenterRepository->deleteHelpCenter($id);
        return ResponseHelper::success('success', 'Help Center deleted successfully');
    }
}
