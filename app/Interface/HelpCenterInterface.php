<?php

namespace App\Interface;

interface HelpCenterInterface
{
    public function getAllHelpCenters();
    public function getHelpCenterById($id);
    public function createHelpCenter(array $data);
    public function updateHelpCenter($id, array $data);
    public function deleteHelpCenter($id);
}
