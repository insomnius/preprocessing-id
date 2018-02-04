<?php
/**
 * insomnius/preprocessing-id (https://github.com/insomnius/preprocessing-id)
 *
 * @link      http://github.com/insomnius/preprocessing-id repository resmi dari package ini
 * @license   https://github.com/insomnius/preprocessing-id/blob/master/LICENSE The MIT License (MIT)
 */

namespace Insomnius\Regex;

/** 
 * Proses:          Clean HTML Entities
 * Cleansing 1a:    Kalimat -> kalimat
 * @method
 * @method
*/
class Regex1a implements RegexInterface
{
    public function regex(string $word)
    {
        $this->group    = 'regex';
        $this->process  = 'regex_html_entities';
        $this->class    = get_class($this);
        $this->detail   = 'menghilangkan semua html entities dengan whitespace.';
        
        $this->process($word);

        return $this;
    }

    public function process(string $word)
    {
        $matches    = [];

        $patern     = '/&#?\w+;+/';
        $contains   = preg_match_all($patern, $word, $matches);
        $process    = preg_replace($patern, ' ', $word);

        $this->matches  = $matches;
        $this->word     = $process;
    }
}