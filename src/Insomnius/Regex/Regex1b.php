<?php
/**
 * insomnius/preprocessing-id (https://github.com/insomnius/preprocessing-id)
 *
 * @link      http://github.com/insomnius/preprocessing-id repository resmi dari package ini
 * @license   https://github.com/insomnius/preprocessing-id/blob/master/LICENSE The MIT License (MIT)
 */

namespace Insomnius\Regex;

/** 
 * Proses:          Clean All Excess White space
 * Cleansing 1a:    Aku adalah           anak gembala -> Aku adalah anak gembala
 * @method
 * @method
*/
class Regex1b implements RegexInterface
{
    public function regex(string $word)
    {
        $this->group    = 'regex';
        $this->process  = 'whitespace';
        $this->class    = get_class($this);
        $this->detail   = 'menjadikan semua whitespace berlebih hanya menjadi satu saja.';
        
        $this->process($word);
        
        return $this;
    }

    public function process(string $word)
    {
        $matches    = [];
        
        $patern     = '/\s+/';
        $contains   = preg_match_all($patern, $word, $matches);
        $process    = preg_replace($patern, ' ', $word);

        $this->word     = $process;
        $this->matches  = $matches[0];
    }
}