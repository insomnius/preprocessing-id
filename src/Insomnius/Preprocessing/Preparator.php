<?php
namespace Insomnius\Preprocessing;

use Insomnius\Preprocessing;
use Insomnius\History\History;

Class Preparator
{
    protected $history = false;
    protected $bow  = [];
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
        if($this->history->count() === 0)
        {
            return $this->word;
        }

        return $this->history->get()[$this->history->count() - 1]->wordAfterProcess;
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