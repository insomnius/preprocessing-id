<?php
namespace Insomnius\Regex;

use Insomnius\History\Detail;

class RegexHtmlEntities implements RegexInterface
{
    public function regex($word)
    {
        $matches  = null;
        
        $patern     = '/&#?\w+;+/';
        $contains   = preg_match_all($patern, $word);
        $process    = preg_replace($patern, ' ', $word);

        $detail     = new Detail();

        $detail->groupProcess   = 'regex';
        $detail->process        = 'html_entities';
        $detail->class          = get_class($this);
        $detail->detail         = 'Menghilangkan semua html entities dengan whitespace.';
        $detail->match          = '';
        
        $detail->wordAfterProcess   = $process;
        $detail->wordBeforeProcess  = $word;
        
        return $detail;
    }
}