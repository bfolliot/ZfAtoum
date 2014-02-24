<?php

namespace ZfAtoum\Controller\tests\units;
require_once __DIR__ . '/../../ZfAtoum/Controller/CommandController.php';

use mageekguy\atoum;

class CommandController extends atoum\test
{

    public function testRunAction()
    {
        $commandController = new \ZfAtoum\Controller\CommandController();
        $this
            ->object($commandController)
                ->isInstanceOf('\ZfAtoum\Controller\CommandController')
        ;
    }
}
