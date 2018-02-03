<?php
/**
 * insomnius/preprocessing-id (https://github.com/insomnius/preprocessing-id)
 *
 * @link      http://github.com/insomnius/preprocessing-id repository resmi dari package ini
 * @license   https://github.com/insomnius/preprocessing-id/blob/master/LICENSE The MIT License (MIT)
 */

namespace Insomnius\Cleansing;

/** 
 * Proses:          Mengubah semua karakter yang tidak terbaca menjadi html entities
 * Cleansing 1b:    kalimat -> kalimat
 * @method
 * @method
*/
class Cleansing1b implements CleansingInterface
{
    public function clean(string $word)
    {   
        $this->group    = 'cleansing';
        $this->process  = 'morph_html_entities';
        $this->class    = get_class($this);
        $this->detail   = 'mengubah semua karater yang tidak terbaca menjadi html entities';
        
        $this->process($word);

        return $this;
    }

    public function process(string $word)
    {
        $this->word = htmlentities($word, ENT_DISALLOWED);
    }
}