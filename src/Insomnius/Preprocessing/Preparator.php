<?php
namespace Insomnius\Preprocessing;

use Insomnius\Preprocessing;
use Insomnius\History\History;

Class Preparator
{
    protected $word;
    protected $cleanWord;
    protected $history = false;

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
        return $this->cleanWord;
    }

    public function getHistory()
    {
        return $this->history->get();
    }

    public function addHistory($detail)
    {
        return $this->history->append($detail);
    }
}