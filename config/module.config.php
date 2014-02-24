<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'controllers' => array(
        'invokables' => array(
            'ZfAtoum\Controller\Command' => 'ZfAtoum\Controller\CommandController'
        ),
    ),
    'console' => array(
        'router' => array(
            'routes' => array(
                'atoum' => array(
                    'type'    => 'simple',       // <- simple route is created by default, we can skip that
                    'options' => array(
                            'route'    => 'atoum',
                            'defaults' => array(
                            'controller' => 'ZfAtoum\Controller\Command',
                            'action'     => 'run'
                        )
                    )
                )
            ),
        ),
    ),
);
