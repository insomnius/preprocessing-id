<?php
namespace Insomnius\Mechanic;

Class Bow
{
    public $word;
    public $ngram;
    public $list    = [];
    
    public function make($word, $ngram = 1)
    {
        if(count($this->list) > 0)
        {
            return $this;
        }

        $this->word     = $word;
        $this->ngram    = $ngram;

        $arrayWord      = explode(' ', $word);
        $arrayUnique    = array_values(array_unique($arrayWord));
        
        $counts     = array_count_values($arrayWord);

        foreach($arrayUnique as $key => $value)
        {
            $insertToArray  = [
                'word'  => $value,
                'count' => $counts[$value]
            ];

            array_push($this->list, $insertToArray);
        }

        usort($this->list, function($a, $b) {
            return $b['count'] <=> $a['count'];
        });

        return $this;
    }

}