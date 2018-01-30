<?php
namespace Insomnius\Preprocessing;

use Insomnius\Preprocessing;
use Insomnius\History\History;

Class Preparator
{
    protected $history = false;
    
    protected $bow  = [];
    protected $bowInserted  = false;

    protected $word;

    public function process($word, $history = true)
    {
        $this->word     = $word;

        if($history)
        {
            $this->history  = new History();
        }

        $preprocessing  = (new Preprocessing\Preprocessor)->start($this);

        return $this;
    }

    public function getWord()
    {
        return $this->word;
    }

    public function getCleanWord()
    {
        if($return = $this->history->cleanWord())
        {
            return $return;
        }
        else
        {
            return $this->word;
        }
    }

    public function setBow($bow)
    {
        if($this->bowInserted)
        {
            return $this;
        }

        $this->bow  = $bow;
        return $this;
    }

    public function getBow()
    {
        return $this->bow;
    }

    public function getHistory()
    {
        return $this->history->get();
    }

    public function appendHistory($detail)
    {
        return $this->history->append($detail);
    }
}