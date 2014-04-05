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
        return new ModuleOptions($serviceLocator->get('Config')['user_rbac']);        
    }
}
