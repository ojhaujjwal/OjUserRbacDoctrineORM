<?php
namespace OjUserRbacDoctrineORMTest\Factory;

use OjUserRbacDoctrineORM\Factory\UserRoleLinkerMapperFactory;
use Zend\ServiceManager\ServiceManager;
use UserRbac\Options\ModuleOptions;

class UserRoleLinkerMapperFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testFactory()
    {
        $factory = new UserRoleLinkerMapperFactory;
        $serviceManager = new ServiceManager;
        $serviceManager->setService('UserRbac\ModuleOptions', new ModuleOptions);
        $serviceManager->setService('OjUserRbacDoctrineORM\Doctrine\Em', $this->getMock('Doctrine\ORM\EntityManagerInterface'));
        $this->assertInstanceOf('OjUserRbacDoctrineORM\Mapper\UserRoleLinkerMapper', $factory->createService($serviceManager));
    }
}
