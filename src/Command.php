<?php

namespace LuhnAlgorithm;

class Command
{
    private $luhnAlgorithm;

    public function __construct(LuhnAlgorithm $luhnAlgorithm)
    {
        $this->luhnAlgorithm = $luhnAlgorithm;
    }

    public function run()
    {
        if(isset($_SERVER['argv'][1])) {
            print $this->luhnAlgorithm->isValid($_SERVER['argv'][1]) ? 'Valid' : 'Invalid';
            print PHP_EOL;
        } else {
            print "Please provide a number" . PHP_EOL;
        }
    }
}
