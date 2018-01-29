<?php
namespace Insomnius\Mechanic;

Class Escorter
{
    protected $manager;

    public function escortToMorphology($preparator)
    {
        $detail   = (new \Insomnius\Morphology\MorphologyCasefolding)->morph($preparator->getWord());
        $preparator->appendHistory($detail);
        $preparator->setWord($detail->wordAfterProcess);

        $detail   = (new \Insomnius\Morphology\MorphologyExcessWhiteSpace)->morph($preparator->getWord());
        $preparator->appendHistory($detail);
        $preparator->setWord($detail->wordAfterProcess);
    }

    public function escortToRegex($preparator)
    {
        // $detail   = (new \Insomnius\Regex\RegexDecimalNumber)->regex($preparator->getWord());
        // $preparator->appendHistory($detail);
        // $preparator->setWord($detail->wordAfterProcess);

        $detail   = (new \Insomnius\Regex\RegexNumberInParentheses)->regex($preparator->getWord());
        $preparator->appendHistory($detail);
        $preparator->setWord($detail->wordAfterProcess);
    }
}