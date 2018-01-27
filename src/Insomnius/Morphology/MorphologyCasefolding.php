<?php

namespace Insomnius\Morphology;

use Insomnius\History\Detail;

Class MorphologyCasefolding  implements MorphologyInterface
{
    public function clean($word)
    {
        $detail     = new Detail();
        $detail->groupProcess   = 'Cleaning';
        $detail->process        = 'Casefolding';
        $detail->class          = get_class($this);
        $detail->detail         = 'Make all string to lowercase.';
        $detail->wordAfterProcess   = strtolower($word);
        $detail->wordBeforeProcess  = $word;
        
        return $detail;
    }
}