<?php

namespace Insomnius\History;

use Insomnius\History\HistoryDetail;

Class History
{
    protected $historyObject    = [];

    public function get()
    {
        return $this->historyObject;
    }

    public function append($detail)
    {
        array_push($this->historyObject, $detail);
    }

    public function count()
    {
        return count($this->historyObject);
    }

    public function cleanWord()
    {
        if($this->count() === 0)
        {
            return false;
        }

        for($i = $this->count() - 1; $i >=0; $i--)
        {
            if(!is_array($this->historyObject[$i]->wordAfterProcess))
            {
                return $this->historyObject[$i]->wordAfterProcess;
            }
        }
    }

}