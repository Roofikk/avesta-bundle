<?php declare(strict_types=1);

namespace roofikk\AvestaBundle\Manager;

use roofikk\AvestaBundle\Contracts\ApiClientInterface;
use roofikk\AvestaBundle\Exception\AvestaException;

class AvestaClientManager
{
    public $testVar;
    public function __construct($testVar){
        $this->testVar = $testVar;
    }

    public function testFunc() {
        var_dump($this->testVar.' from function');
    }
}