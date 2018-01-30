<?php

namespace Insomnius\Morphology;

use Insomnius\History\Detail;

Class MorphologyHtmlEntities  implements MorphologyInterface
{
    public function morph($word)
    {
        $process    = htmlentities($word, ENT_DISALLOWED);

        $detail     = new Detail();
        
        $detail->groupProcess   = 'morphology';
        $detail->process        = 'html_entities';
        $detail->class          = get_class($this);
        $detail->detail         = 'Mengubah semua simbol yang tidak bisa terbaca oleh HTML menjadi HTML entities';

        $detail->wordAfterProcess   = $process;
        $detail->wordBeforeProcess  = $word;
        
        return $detail;
    }
}