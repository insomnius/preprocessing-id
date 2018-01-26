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

        $this->cleaning($preparator->getWord());
    }

    protected function cleaning($word)
    {
        $this->escort->escortToCleaner($word);
    }
}