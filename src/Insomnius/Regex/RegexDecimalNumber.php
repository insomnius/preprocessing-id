<?php

namespace Insomnius\Regex;

class RegexDecimalNumber implements RegexInterface
{
    public function regex($word)
    {
        $matches  = null;
        $contains = preg_match('/^-?\d+(,\d+)*(\.\d+(e\d+)?)?$/', $word, $matches);

        
    }
}