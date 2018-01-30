<?php
namespace Insomnius\Mechanic;

Class Escorter
{
    protected $manager;

    public function morphology($preparator)
    {
        $detail   = (new \Insomnius\Morphology\MorphologyCasefolding)->morph($preparator->getWord());
        $preparator->appendHistory($detail);
        $preparator->setWord($detail->wordAfterProcess);

        $detail   = (new \Insomnius\Morphology\MorphologyHtmlEntities)->morph($preparator->getWord());
        $preparator->appendHistory($detail);
        $preparator->setWord($detail->wordAfterProcess);
    }

    public function regex($preparator)
    {
        $detail   = (new \Insomnius\Regex\RegexExcessWhiteSpace)->regex($preparator->getWord());
        $preparator->appendHistory($detail);
        $preparator->setWord($detail->wordAfterProcess);

        $detail   = (new \Insomnius\Regex\RegexHtmlEntities)->regex($preparator->getWord());
        $preparator->appendHistory($detail);
        $preparator->setWord($detail->wordAfterProcess);
        
        // $detail   = (new \Insomnius\Regex\RegexDecimalNumber)->regex($preparator->getWord());
        // $preparator->appendHistory($detail);
        // $preparator->setWord($detail->wordAfterProcess);

        $detail   = (new \Insomnius\Regex\RegexNumberInParentheses)->regex($preparator->getWord());
        $preparator->appendHistory($detail);
        $preparator->setWord($detail->wordAfterProcess);

        $detail   = (new \Insomnius\Regex\RegexEndOfWordSymbol)->regex($preparator->getWord());
        $preparator->appendHistory($detail);
        $preparator->setWord($detail->wordAfterProcess);

        $detail   = (new \Insomnius\Regex\RegexInitialWordSymbol)->regex($preparator->getWord());
        $preparator->appendHistory($detail);
        $preparator->setWord($detail->wordAfterProcess);
    }

    public function advanceMorphology($preparator)
    {
        $detail   = (new \Insomnius\Morphology\MorphologyStemming)->morph($preparator->getWord());
        $preparator->appendHistory($detail);
        $preparator->setWord($detail->wordAfterProcess);
    }
}