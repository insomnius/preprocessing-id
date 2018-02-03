<?php
/**
 * insomnius/preprocessing-id (https://github.com/insomnius/preprocessing-id)
 *
 * @link      http://github.com/insomnius/preprocessing-id repository resmi dari package ini
 * @license   https://github.com/insomnius/preprocessing-id/blob/master/LICENSE The MIT License (MIT)
 */

namespace Insomnius\Regex;

/** 
 * Proses:          Clean all number in parentheses
 * Cleansing 1a:    Sebagian warga indonesia berumur 20-15 tahun.[1] -> Sebagian warga indonesia berumur 20-15 tahun.
 * @method
 * @method
*/
class Regex1c implements RegexInterface
{
    public function regex(string $word)
    {
        $this->group    = 'regex';
        $this->process  = 'number_parentheses';
        $this->class    = get_class($this);
        $this->detail   = 'menghilangkan semua angka yang ada di dalam kurung.';
        
        $this->process($word);
        
        return $this;
    }

    public function process(string $word)
    {
        $matches    = [];

        $patern     = '/[\[\({]+\d+[\]\)}]/';
        $contains   = preg_match_all($patern, $word, $matches);
        $process    = preg_replace($patern, '', $word);

        $this->word     = $process;
        $this->matches  = $matches[0];
    }
}