<?php

namespace Insomnius\History;

Class HistoryDetail
{
    public $groupProcess;
    public $process;
    public $class;
    public $detail;
    public $match;
    public $wordAfterProcess;

    public function create($detail)
    {
        $this->groupProcess     = $detail['groupProcess'];
        $this->process          = $detail['process'];
        $this->class            = $detail['class'];
        $this->detail           = $detail['detail'];
        $this->match            = $detail['match'];
        $this->wordAfterProcess     = $detail['wordAfterProcess'];

        return $this;
    }
}