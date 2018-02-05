<?php
/**
 * insomnius/preprocessing-id (https://github.com/insomnius/preprocessing-id)
 *
 * @link      http://github.com/insomnius/preprocessing-id repository resmi dari package ini
 * @license   https://github.com/insomnius/preprocessing-id/blob/master/LICENSE The MIT License (MIT)
 */

namespace Insomnius\Regex;

/** 
 * Proses:          Clean all date
 * Cleansing 1a:    Pada tanggal 1 Januari 2019 -> pada tanggal
 * @method
 * @method
*/
class Regex1e implements RegexInterface
{
    public function regex(string $word)
    {
        $this->group    = 'regex';
        $this->process  = 'regex_date';
        $this->class    = get_class($this);
        $this->detail   = 'membersihkan semua tanggal yang ada pada text.';
        
        $this->process($word);

        return $this;
    }

    public function process(string $word)
    {
        $matches    = [];

        $patern     = '/(\d{1,4})+( +|-|\/|\\)(\d{1,2}|\w{3,9})+( +|-|\/|\\)?(\d{1,4})?/';
        $contains   = preg_match_all($patern, $word, $matches);

        $process    = preg_replace($patern, '', $word);

        $this->word     = $word;
        $this->matches  = $matches;
    }
}