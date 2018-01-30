<?php

namespace Insomnius\Morphology;

use Insomnius\History\Detail;

Class MorphologyUnique  implements MorphologyInterface
{
    public function morph($word)
    {
        $arrayWord  = explode(' ', $word);
        $arrayWord  = array_values(array_unique($arrayWord));

        $process    = implode(' ', $arrayWord);

        $detail     = new Detail();
        
        $detail->groupProcess   = 'Morphology';
        $detail->process        = 'Casefolding';
        $detail->class          = get_class($this);
        $detail->detail         = 'Make unique to all string.';

        $detail->wordAfterProcess   = $process;
        $detail->wordBeforeProcess  = $word;
        
        return $detail;
    }
}