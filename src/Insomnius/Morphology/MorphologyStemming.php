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
        
        $detail->groupProcess   = 'Morphology';
        $detail->process        = 'Stemming';
        $detail->class          = get_class($this);
        $detail->detail         = 'Stemming all text into its root word.';

        $detail->wordAfterProcess   = $process;
        $detail->wordBeforeProcess  = $word;
        
        return $detail;
    }
}