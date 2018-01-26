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

}