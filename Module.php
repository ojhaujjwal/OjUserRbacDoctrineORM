<?php
namespace OjUserRbacDoctrineORM;

use Zend\Mvc\MvcEvent;
use Doctrine\ORM\Mapping\Driver\XmlDriver;

class Module
{

    public function onBootstrap(MvcEvent $e)
    {
        $serviceManager = $e->getApplication()->getServiceManager();
        $options        = $serviceManager->get('UserRbac\ModuleOptions');

        // Add the default entity driver only if specified in configuration
        if ($options->getEnableDefaultEntities()) {
            $chain = $serviceManager->get('doctrine.driver.orm_default');
            $chain->addDriver(new XmlDriver(__DIR__ . '/config/xml/OjUserRbacDoctrineORM'), 'OjUserRbacDoctrineORM\Entity');
        }
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
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
            'aliases' => array(
                'OjUserRbacDoctrineORM\Doctrine\Em' => 'Doctrine\ORM\EntityManager',

            ),
            'factories' => array(
                'UserRbac\UserRoleLinkerMapper' => 'OjUserRbacDoctrineORM\Factory\UserRoleLinkerMapperFactory',
                'UserRbac\ModuleOptions' => 'OjUserRbacDoctrineORM\Factory\ModuleOptionsFactory',
            )        
        );
    }
}
