<?php

namespace Insomnius\Preprocessing;

class Preprocessor
{
    protected $escort;
    protected $preparator;

    public function start($preparator)
    {
        $this->preparator = $preparator;
        $this->escort     = new Escorter();

        $this->escort->cleansing($this->preparator);

        print_r($this->preparator->history->last());

        $this->preparator->result   = new Result($this->preparator);
    }
}