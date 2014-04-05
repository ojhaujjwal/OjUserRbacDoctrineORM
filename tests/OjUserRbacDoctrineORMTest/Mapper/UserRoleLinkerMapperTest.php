<?php
namespace OjUserRbacDoctrineORMTest\Mapper;

use OjUserRbacDoctrineORM\Mapper\UserRoleLinkerMapper;
use UserRbac\Options\ModuleOptions;
use ZfcUser\Entity\User;
use OjUserRbacDoctrineORM\Entity\UserRoleLinker;

class UserRoleLinkerMapperTest extends \PHPUnit_Framework_TestCase
{
    public function testFindByUser()
    {
        $options = new ModuleOptions();
        $entityManager = $this->getMock('Doctrine\ORM\EntityManagerInterface');
        $mapper = new UserRoleLinkerMapper($entityManager, $options);
        $user = new User;
        $repository = $this->getMockBuilder('Doctrine\ORM\EntityRepository')
            ->disableOriginalConstructor()
            ->getMock();
        $entity = new UserRoleLinker;
        $entityManager->expects($this->once())
            ->method('getRepository')
            ->will($this->returnValue($repository));
        $repository->expects($this->once())
            ->method('findBy')
            ->will($this->returnValue([$entity]));
        $this->assertEquals([$entity], $mapper->findByUser($user));
    }
}
