<?php
/**
 * insomnius/preprocessing-id (https://github.com/insomnius/preprocessing-id)
 *
 * @link      http://github.com/insomnius/preprocessing-id repository resmi dari package ini
 * @license   https://github.com/insomnius/preprocessing-id/blob/master/LICENSE The MIT License (MIT)
 */

namespace Insomnius\Cleansing;

/** 
 * Proses:          Stemming
 * Package:         Sastrawi
 * Cleansing 1a:    mengerjakan -> kerja
 * @method
 * @method
*/
class Sastrawi implements StemmingInterface
{
    public function stem(string $word)
    {
        $this->group    = 'stemming';
        $this->process  = 'sastrwai';
        $this->class    = get_class($this);
        $this->detail   = 'proses pencarian kata dasar atau stemming menggunakan package Sastrawi dengan menerapkan algoritma Nazief dan Adriani.';
        
        // $this->process($word);
        
        return $this;
    }

    public function process(string $word)
    {
        $this->word = strtolower($word);
    }
}