<?php
namespace Insomnius\Morphology;

use Insomnius\History\Detail;

class MorphologyExcessWhiteSpace implements MorphologyInterface
{
    public function morph($word)
    {
        $matches  = null;
        
        $patern     = '/\s+/';
        $contains   = preg_match_all($patern, $word);
        $process    = preg_replace($patern, ' ', $word);

        $detail     = new Detail();

        $detail->groupProcess   = 'Regex';
        $detail->process        = 'Regex';
        $detail->class          = get_class($this);
        $detail->detail         = 'Fix all excess whitespace.';
        $detail->match          = '';
        
        $detail->wordAfterProcess   = $process;
        $detail->wordBeforeProcess  = $word;
        
        return $detail;
    }
}