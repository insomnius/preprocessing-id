<?php

namespace Insomnius\Morphology;

use Insomnius\History\Detail;
use Sastrawi\Stemmer\StemmerFactory;
use Sastrawi\StopWordRemover\StopWordRemoverFactory;

Class MorphologyStemming  implements MorphologyInterface
{
    public function morph($word)
    {
        $stemmerFactory = (new StemmerFactory)->createStemmer();
        $process        = $stemmerFactory->stem($word);

        $detail     = new Detail();
        
        $detail->groupProcess   = 'morphology';
        $detail->process        = 'stemming';
        $detail->class          = get_class($this);
        $detail->detail         = 'Proses pencarian kata dasar';

        $detail->wordAfterProcess   = $process;
        $detail->wordBeforeProcess  = $word;
        
        return $detail;
    }
}