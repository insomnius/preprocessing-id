<?php

namespace Insomnius\Regex;

use Insomnius\History\Detail;

class RegexInitialWordSymbol implements RegexInterface
{
    public function regex($word)
    {
        $matches  = null;
        
        $patern     = '/(\B[^a-z 0-9]+)/';
        $contains   = preg_match_all($patern, $word, $matches);
        $process    = preg_replace($patern, '', $word);

        $detail     = new Detail();

        $detail->groupProcess   = 'regex';
        $detail->process        = 'initial_word_symblo';
        $detail->class          = get_class($this);
        $detail->detail         = 'Menghilangkan semua simbol yang ada di awal kata.';
        $detail->match          = $matches[0];

        $detail->wordAfterProcess   = $process;
        $detail->wordBeforeProcess  = $word;
        
        return $detail;
    }
}