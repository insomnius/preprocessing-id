<?php
/**
 * insomnius/preprocessing-id (https://github.com/insomnius/preprocessing-id)
 *
 * @link      http://github.com/insomnius/preprocessing-id repository resmi dari package ini
 * @license   https://github.com/insomnius/preprocessing-id/blob/master/LICENSE The MIT License (MIT)
 */

namespace Insomnius\Preprocessing;

/**
 * @property
 * @property
 * @method
 */
class Preparator
{
    public $history;
    protected $word;

    public function process($word, $history = true)
    {
        $this->word     = $word;
        $this->history  = new History();

        $preprocessing  = (new Preprocessor)->start($this);

        return $this->result;
    }

    public function getWord()
    {
        return $this->word;
    }

    // public function setBow($bow)
    // {
    //     if($this->bowInserted)
    //     {
    //         return $this;
    //     }

    //     $this->bow  = $bow;
    //     return $this;
    // }

    // public function getBow()
    // {
    //     return $this->bow;
    // }

    // public function getHistory()
    // {
    //     return $this->history->get();
    // }

    // public function appendHistory($detail)
    // {
    //     return $this->history->append($detail);
    // }
}