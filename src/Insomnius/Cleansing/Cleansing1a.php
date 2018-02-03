<?php
/**
 * insomnius/preprocessing-id (https://github.com/insomnius/preprocessing-id)
 *
 * @link      http://github.com/insomnius/preprocessing-id repository resmi dari package ini
 * @license   https://github.com/insomnius/preprocessing-id/blob/master/LICENSE The MIT License (MIT)
 */

namespace Insomnius\Cleansing;

/** 
 * Proses:          Casefolding
 * Cleansing 1a:    Kalimat -> kalimat
 * @method
 * @method
*/
class Cleansing1a implements CleansingInterface
{
    public function clean(string $word)
    {
        $this->group    = 'cleaning';
        $this->process  = 'casefolding';
        $this->class    = get_class($this);
        $this->detail   = 'proses ini dilakukan untuk menyamaratakan semua besar kecil huruf menjadi huruf kecil';
        
        $this->process($word);
        
        return $this;
    }

    public function process(string $word)
    {
        $this->word = strtolower($word);
    }
}