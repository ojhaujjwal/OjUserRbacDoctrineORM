<?php
namespace OjUserRbacDoctrineORMTest\Entity;

use OjUserRbacDoctrineORM\Entity\UserRoleLinker;
use ZfcUser\Entity\User;

class UserRoleLinkerTest extends \PHPUnit_Framework_TestCase
{
    public function testSettersAndGetters()
    {
        $user = new User;
        $entity = new UserRoleLinker($user, 'police');
        $this->assertEquals($user, $entity->getUser());
        $this->assertEquals('police', $entity->getRoleId());
    }
}
