<?php

namespace Insomnius\Regex;

use Insomnius\History\Detail;

class RegexDecimalNumber implements RegexInterface
{
    public function regex($word)
    {
        $matches  = null;
        
        $patern     = '/-?\d+(,\d+)*(\.\d+(e\d+)?)?/';
        $contains   = preg_match_all($patern, $word, $matches);
        $process    = preg_replace($patern, '', $word);

        $detail     = new Detail();

        $detail->groupProcess   = 'regex';
        $detail->process        = 'decimal_number';
        $detail->class          = get_class($this);
        $detail->detail         = 'Menghilangkan semua decimal number.';
        $detail->match          = $matches[0];

        $detail->wordAfterProcess   = $process;
        $detail->wordBeforeProcess  = $word;
        
        return $detail;
    }
}