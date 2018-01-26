<?php

namespace Insomnius\Cleaning;

class Casefolding  implements CleaningInterface
{
    public function clean($word)
    {
        return strtolower($word);
    }
}