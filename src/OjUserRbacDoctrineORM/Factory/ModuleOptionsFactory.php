<?php
namespace OjUserRbacDoctrineORM\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use OjUserRbacDoctrineORM\Options\ModuleOptions;

class ModuleOptionsFactory implements FactoryInterface
{
    /**
     * gets ModuleOptions
     * 
     * @param ServiceLocatorInterface $serviceLocator
     * @return ModuleOptions
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');
        $moduleConfig = isset($config['user_rbac']) ? $config['user_rbac'] : array();

        return new ModuleOptions($moduleConfig);        
    }
}
