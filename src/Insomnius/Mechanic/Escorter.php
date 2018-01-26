<?php

namespace Insomnius\Mechanic;

use Insomnius\Mechanic\Manager;

Class Escorter
{
    protected $manager;

    public function __construct()
    {
        $this->manager  = (new Manager);
    }

    public function escortToCleaner($word)
    {
        $list   = $this->manager->list('cleaning');
    }

}