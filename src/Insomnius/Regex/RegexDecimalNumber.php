<?php

namespace Insomnius\Regex;

use Insomnius\History\Detail;

class RegexDecimalNumber implements RegexInterface
{
    public function regex($word)
    {
        $matches  = null;
        
        $patern   = '/-?\d+(,\d+)*(\.\d+(e\d+)?)?/';
        $contains = preg_match_all($patern, $word, $matches);

        $detail     = new Detail();
        $detail->groupProcess   = 'Regex';
        $detail->process        = 'Regex';
        $detail->class          = get_class($this);
        $detail->detail         = 'Get rid of all decimal number.';
        $detail->match          = $matches[0];
        $detail->wordAfterProcess   = preg_replace($patern, '', $word);
        $detail->wordBeforeProcess  = $word;
        
        return $detail;
    }
}