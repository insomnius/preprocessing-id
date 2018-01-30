<?php

namespace Insomnius\Regex;

use Insomnius\History\Detail;

class RegexNumberInParentheses implements RegexInterface
{
    public function regex($word)
    {
        $matches  = null;
        
        $patern     = '/[\[\({]+\d+[\]\)}]/';
        $contains   = preg_match_all($patern, $word, $matches);
        $process    = preg_replace($patern, '', $word);

        $detail     = new Detail();

        $detail->groupProcess   = 'regex';
        $detail->process        = 'number_parentheses';
        $detail->class          = get_class($this);
        $detail->detail         = 'Menghilangkan semua number yang ada di dalam kurung.';
        $detail->match          = $matches[0];
        
        $detail->wordAfterProcess   = $process;
        $detail->wordBeforeProcess  = $word;
        
        return $detail;
    }
}