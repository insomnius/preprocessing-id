<?php

namespace Insomnius\Regex;

interface RegexInterface
{
    public function regex(string $word);
    public function process(string $word);
}
