<?php
namespace Insomnius\Preprocessing;

use Insomnius\Preprocessing;
use Insomnius\History\History;

Class Preparator
{
    protected $word;
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

    public function setWord($word)
    {
        $this->word     = $word;
        return $this;
    }

    public function getCleanWord()
    {
        
        return $this->history->get()[count($this->history->get()) - 1]->wordAfterProcess;
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