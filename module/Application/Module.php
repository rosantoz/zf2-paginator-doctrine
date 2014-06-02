<?php

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Application\Paginator\Adapter as PaginatorAdapter;
use Zend\Paginator\Paginator;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'Application\Paginator\User'        => function ($serviceManager) {

                    $entityManager  = $serviceManager->get(
                        'Doctrine\ORM\EntityManager'
                    );

                    $userRepository = $entityManager
                        ->getRepository('Application\Entity\User');

                    $adapter        = new PaginatorAdapter($userRepository);

                    $page           = $serviceManager
                        ->get('application')
                        ->getMvcEvent()
                        ->getRouteMatch()
                        ->getParam('page');

                    $paginator      = new Paginator($adapter);
                    $paginator->setCurrentPageNumber($page)
                        ->setItemCountPerPage(5); // how many items per page

                    return $paginator;
                }
            )
        );
    }
}
