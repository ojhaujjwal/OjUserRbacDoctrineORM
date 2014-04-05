<?php

namespace OjUserRbacDoctrineORM\Entity;

use ZfcUser\Entity\UserInterface;

trait UserRoleLinkerTrait
{
    /**
     * @var UserInterface
     */
    protected $user;

    /**
     * @var string $roleId    Role
     */
    protected $roleId;

    /**
     * Constructor
     *
     * @param UserInterface|null $user
     * @param string|null        $roleId
     */
    public function __construct(UserInterface $user = null, $roleId = null)
    {
        if ($user) {
            $this->setUser($user);
        }
        if ($roleId) {
            $this->setRoleId($roleId);
        }
    }

    /**
     * Sets user
     *
     * @param  UserInterface $user
     * @return self
     */
    public function setUser(UserInterface $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Gets user
     *
     * @return UserInterface
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets role
     *
     * @param  string $roleId
     * @return self
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getRoleId()
    {
        return $this->roleId;
    }
}
