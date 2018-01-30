<?php
namespace Insomnius\Mechanic;

Class Escorter
{
    public function morphology($preparator)
    {
        $detail   = (new \Insomnius\Morphology\MorphologyCasefolding)->morph($preparator->getCleanWord());
        $preparator->appendHistory($detail);

        $detail   = (new \Insomnius\Morphology\MorphologyHtmlEntities)->morph($preparator->getCleanWord());
        $preparator->appendHistory($detail);
    }

    public function regex($preparator)
    {
        $detail   = (new \Insomnius\Regex\RegexHtmlEntities)->regex($preparator->getCleanWord());
        $preparator->appendHistory($detail);

        $detail   = (new \Insomnius\Regex\RegexExcessWhiteSpace)->regex($preparator->getCleanWord());
        $preparator->appendHistory($detail);
        
        // $detail   = (new \Insomnius\Regex\RegexDecimalNumber)->regex($preparator->getCleanWord());
        // $preparator->appendHistory($detail);

        $detail   = (new \Insomnius\Regex\RegexNumberInParentheses)->regex($preparator->getCleanWord());
        $preparator->appendHistory($detail);

        $detail   = (new \Insomnius\Regex\RegexEndOfWordSymbol)->regex($preparator->getCleanWord());
        $preparator->appendHistory($detail);

        $detail   = (new \Insomnius\Regex\RegexInitialWordSymbol)->regex($preparator->getCleanWord());
        $preparator->appendHistory($detail);
    }

    public function advanceMorphology($preparator)
    {
        $detail   = (new \Insomnius\Morphology\MorphologyStemming)->morph($preparator->getCleanWord());
        $preparator->appendHistory($detail);

        $preparator->setBow((new Bow)->make($preparator->getCleanWord()));

        // $detail   = (new \Insomnius\Morphology\MorphologyUnique)->morph($preparator->getCleanWord());
        // $preparator->appendHistory($detail);
    }
}