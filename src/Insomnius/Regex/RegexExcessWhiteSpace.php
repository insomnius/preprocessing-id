<?php
namespace Insomnius\Regex;

use Insomnius\History\Detail;

class RegexExcessWhiteSpace implements RegexInterface
{
    public function regex($word)
    {
        $matches  = null;
        
        $patern     = '/\s+/';
        $contains   = preg_match_all($patern, $word);
        $process    = preg_replace($patern, ' ', $word);

        $detail     = new Detail();

        $detail->groupProcess   = 'regex';
        $detail->process        = 'whitespace';
        $detail->class          = get_class($this);
        $detail->detail         = 'Membenarkan semua whitespace yang berlebih.';
        $detail->match          = '';
        
        $detail->wordAfterProcess   = $process;
        $detail->wordBeforeProcess  = $word;
        
        return $detail;
    }
}