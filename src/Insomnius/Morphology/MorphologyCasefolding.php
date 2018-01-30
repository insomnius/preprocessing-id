<?php

namespace Insomnius\Morphology;

use Insomnius\History\Detail;

Class MorphologyCasefolding  implements MorphologyInterface
{
    public function morph($word)
    {
        $process    = strtolower($word);

        $detail     = new Detail();
        
        $detail->groupProcess   = 'morphology';
        $detail->process        = 'casefolding';
        $detail->class          = get_class($this);
        $detail->detail         = 'Membuat semua string menjadi huruf kecil';

        $detail->wordAfterProcess   = $process;
        $detail->wordBeforeProcess  = $word;
        
        return $detail;
    }
}