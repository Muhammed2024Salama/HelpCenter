<?php

namespace App\Repository;

use App\Interface\HelpCenterInterface;
use App\Models\HelpCenter;

class HelpCenterRepository implements HelpCenterInterface
{

    public function getAllHelpCenters()
    {
        return HelpCenter::all();
    }

    public function getHelpCenterById($id)
    {
        return HelpCenter::findOrFail($id);
    }

    public function createHelpCenter(array $data)
    {
        return HelpCenter::create($data);
    }

    public function updateHelpCenter($id, array $data)
    {
        $helpCenter = HelpCenter::findOrFail($id);
        $helpCenter->update($data);
        return $helpCenter;
    }

    public function deleteHelpCenter($id)
    {
        $helpCenter = HelpCenter::findOrFail($id);
        return $helpCenter->delete();
    }
}
