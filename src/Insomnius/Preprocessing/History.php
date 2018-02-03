<?php

namespace Insomnius\Preprocessing;

class History
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

    public function last()
    {
        return array_pop($this->historyObject);
    }

}