<?php
/**
 * insomnius/preprocessing-id (https://github.com/insomnius/preprocessing-id)
 *
 * @link      http://github.com/insomnius/preprocessing-id repository resmi dari package ini
 * @license   https://github.com/insomnius/preprocessing-id/blob/master/LICENSE The MIT License (MIT)
 */

namespace Insomnius\Regex;

/** 
 * Proses:          Clean all parentheses
 * Cleansing 1a:    KTP (Kartu tanda penduduk) -> KTP Kartu tanda penduduk
 * @method
 * @method
*/
class Regex1d implements RegexInterface
{
    public function regex(string $word)
    {
        $this->group    = 'regex';
        $this->process  = 'regex_parentheses';
        $this->class    = get_class($this);
        $this->detail   = 'menghilangkan tanda kurung yang mengurung kaliamt.';
        
        $this->process($word);

        return $this;
    }

    public function process(string $word)
    {
        $matches    = [];

        $patern     = '/\((?|(.{0,}?))\)/';
        $contains   = preg_match_all($patern, $word, $matches);

        $patern     = array($patern);
        $replace    = array('/[()]/');
        $process    = preg_replace_callback($patern, function($callback){
            return $callback[1];
        }, $word);

        $this->word     = $process;
        $this->matches  = $matches;
    }
}