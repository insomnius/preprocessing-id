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

        $this->escort->cleansing($preparator);

        // $this->escort->morphology($preparator);
        // $this->escort->regex($preparator);
        // $this->escort->advanceMorphology($preparator);

        $this->preparator->result   = new Result($this->preparator);
    }
}