<?php
namespace OjUserRbacDoctrineORM\Options;

class ModuleOptions extends \UserRbac\Options\ModuleOptions
{
    /**
     * @var bool
     */
    protected $enableDefaultEntities = true;

    /**
     * Sets if default entity is to be used
     *
     * @param boolean $enableDefaultEntities
     *
     * @return self
     */
    public function setEnableDefaultEntities($enableDefaultEntities)
    {
        $this->enableDefaultEntities = $enableDefaultEntities;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableDefaultEntities()
    {
        return $this->enableDefaultEntities;
    }    
}
