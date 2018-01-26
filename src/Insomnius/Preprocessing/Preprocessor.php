<?php

namespace Insomnius\Preprocessing;

use Insomnius\Mechanic;

Class Preprocessor
{
    protected $escort;
    protected $preparator;

    public function start($preparator)
    {
        $this->preparator = $preparator;
        $this->escort     = new Mechanic\Escorter();

        $this->escort->escortToCleaner($preparator);
        $this->escort->escortToRegex($preparator);
    }
}