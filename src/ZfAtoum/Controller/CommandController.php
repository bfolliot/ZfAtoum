<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZfAtoum\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use mageekguy\atoum\scripts\runner;

class CommandController extends AbstractActionController
{
    public function runAction()
    {
        $runner = new runner('atoum');
        $runner->run(array(
            '-bf',
            './init_autoloader.php',
            '-d',
            'module',
        ));
    }
}
