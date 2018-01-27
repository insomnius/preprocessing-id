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

    public function escortToMorphology($preparator)
    {
        $list   = $this->manager->list('cleaning');

        foreach($list as $key => $value)
        {
            $detail   = (new $value)->morph($preparator->getWord());

            $preparator->appendHistory($detail);
            $preparator->setWord($detail->wordAfterProcess);
        }
    }

    public function escortToRegex($preparator)
    {
        $list   = $this->manager->list('regex');

        foreach($list as $key => $value)
        {
            $detail   = (new $value)->regex($preparator->getWord());

            $preparator->appendHistory($detail);
            $preparator->setWord($detail->wordAfterProcess);
        }
    }
}