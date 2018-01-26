<?php

namespace Insomnius\Regex;

use Insomnius\History\Detail;

class RegexDecimalNumber implements RegexInterface
{
    public function regex($word)
    {
        $matches  = null;
        $contains = preg_match('/-?\d+(,\d+)*(\.\d+(e\d+)?)?/', $word, $matches);

        $detail     = new Detail();
        $detail->groupProcess   = 'Regex';
        $detail->process        = 'Regex';
        $detail->class          = get_class($this);
        $detail->detail         = 'Get rid of all decimal number.';
        $detail->match          = $matches;
        $detail->wordAfterProcess   = strtolower($word);
        $detail->wordBeforeProcess  = $word;
        
        return $detail;
    }
}