<?php

namespace Insomnius\Cleaning;

Class CleaningCasefolding  implements CleaningInterface
{
    public function clean($word)
    {
        return strtolower($word);
    }
}