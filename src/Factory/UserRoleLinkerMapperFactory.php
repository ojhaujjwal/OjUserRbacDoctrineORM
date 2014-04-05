<?php
namespace OjUserRbacDoctrineORM\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use OjUserRbacDoctrineORM\Mapper\UserRoleLinkerMapper;

class UserRoleLinkerMapperFactory implements FactoryInterface
{
    /**
     * Gets user role linker
     * 
     * @param ServiceLocatorInterface $serviceLocator
     * @return UserRoleLinkerMapper
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new UserRoleLinkerMapper(
            $serviceLocator->get('OjUserRbacDoctrineORM\Doctrine\Em'), 
            $serviceLocator->get('UserRbac\ModuleOptions')
        );
    }
}
