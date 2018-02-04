<?php

namespace Insomnius\Regex;

use Insomnius\History\Detail;

class RegexEndOfWordSymbol implements RegexInterface
{
    public function regex($word)
    {
        
        $matches  = null;

        $patern     = '/([^a-zA-Z0-9 ])\B/';
        $contains   = preg_match_all($patern, $word, $matches);
        $process    = preg_replace($patern, '', $word);

        $detail     = new Detail();

        $detail->groupProcess   = 'regex';
        $detail->process        = 'eof_symbol';
        $detail->class          = get_class($this);
        $detail->detail         = 'Menghilangkan semua simbol diakhir kata.';
        $detail->match          = $matches[0];

        $detail->wordAfterProcess   = $process;
        $detail->wordBeforeProcess  = $word;
        
        return $detail;
    }

}