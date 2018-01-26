<?php
namespace Insomnius\Preprocessing;

use Insomnius\Preprocessing\History;

Class Preparator
{
    protected $word;
    protected $cleanWord;
    
    public function process($word)
    {
        $this->word     = $word;
        
        return $this;       
    }

    public function getWord()
    {
        return $this->word;
    }

    public function getCleanWord()
    {
        return $this->cleanWord;
    }

}