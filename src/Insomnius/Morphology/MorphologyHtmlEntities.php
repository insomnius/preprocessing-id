<?php

namespace Insomnius\Morphology;

use Insomnius\History\Detail;

Class MorphologyHtmlEntities  implements MorphologyInterface
{
    public function morph($word)
    {
        $process    = htmlentities($word, ENT_DISALLOWED);

        $detail     = new Detail();
        
        $detail->groupProcess   = 'Morphology';
        $detail->process        = 'HTML Entities';
        $detail->class          = get_class($this);
        $detail->detail         = 'Convert all symbol with ENT_DISALOWWED flag into possible HTML entities.';

        $detail->wordAfterProcess   = $process;
        $detail->wordBeforeProcess  = $word;
        
        return $detail;
    }
}