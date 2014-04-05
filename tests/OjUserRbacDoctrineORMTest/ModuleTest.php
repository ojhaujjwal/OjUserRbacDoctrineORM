<?php
namespace OjUserRbacDoctrineORMTest;

use OjUserRbacDoctrineORM\Module;

class ModuleTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigIsArray()
    {
        $module = new Module();
        $this->assertInternalType('array', $module->getConfig());
        $this->assertInternalType('array', $module->getServiceConfig());
    }    
}
