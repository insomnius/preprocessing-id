<?php
/**
 * insomnius/preprocessing-id (https://github.com/insomnius/preprocessing-id)
 *
 * @link      http://github.com/insomnius/preprocessing-id repository resmi dari package ini
 * @license   https://github.com/insomnius/preprocessing-id/blob/master/LICENSE The MIT License (MIT)
 */

namespace Insomnius\Preprocessing;

class Escorter
{
    public function cleansing($preparator)
    {
        $process    = (new \Insomnius\Cleansing\Cleansing1a)->clean($preparator->getWord());
        $preparator->history->append($process);

        $process   = (new \Insomnius\Cleansing\Cleansing1b)->clean($preparator->history->last()->word);
        $preparator->history->append($process);

        $process   = (new \Insomnius\Regex\Regex1a)->regex($preparator->history->last()->word);
        $preparator->history->append($process);

        $process   = (new \Insomnius\Regex\Regex1b)->regex($preparator->history->last()->word);
        $preparator->history->append($process);

        $process   = (new \Insomnius\Regex\Regex1c)->regex($preparator->history->last()->word);
        $preparator->history->append($process);

        print_r($process);
    }

    public function stopword($preparator)
    {

    }

    public function stemming($preparator)
    {

    }

    // public function regex($preparator)
    // {
    //     $detail   = (new \Insomnius\Regex\RegexEndOfWordSymbol)->regex($preparator->getCleanWord());
    //     $preparator->appendHistory($detail);

    //     $detail   = (new \Insomnius\Regex\RegexInitialWordSymbol)->regex($preparator->getCleanWord());
    //     $preparator->appendHistory($detail);
    // }

    // public function advanceMorphology($preparator)
    // {
    //     $detail   = (new \Insomnius\Morphology\MorphologyStemming)->morph($preparator->getCleanWord());
    //     $preparator->appendHistory($detail);

    //     $preparator->setBow((new Bow)->make($preparator->getCleanWord()));

    //     $detail   = (new \Insomnius\Morphology\MorphologyUnique)->morph($preparator->getCleanWord());
    //     $preparator->appendHistory($detail);
    // }
}