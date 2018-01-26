<?php

namespace Insomnius\History;

use Insomnius\History\HistoryDetail;

Class History
{
    protected $historyObject    = [];

    public function get()
    {

    }

    public function append($detail)
    {
        if(is_array($detail))
        {
            foreach($detail as $key => $value)
            {
                array_push($this->historyObject, (new HistoryDetail)->create($value));
            }
            return $this;
        }
    }

}