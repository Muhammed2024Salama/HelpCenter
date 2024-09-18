<?php

namespace App\Interface;

interface ContactSupportInterface
{
    public function store(array $data);
    public function getAll();
}
