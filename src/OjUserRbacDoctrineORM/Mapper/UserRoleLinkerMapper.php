<?php
namespace OjUserRbacDoctrineORM\Mapper;

use Doctrine\ORM\EntityManagerInterface;
use OjUserRbacDoctrineORM\Options\ModuleOptions;
use UserRbac\Entity\UserRoleLinkerInterface;
use UserRbac\Mapper\UserRoleLinkerMapperInterface;
use ZfcUser\Entity\UserInterface;

class UserRoleLinkerMapper implements UserRoleLinkerMapperInterface
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var ModuleOptions
     *
     */
    protected $options;

    /**
     * Constructor
     *
     * @param EntityManagerInterface $em
     * @param ModuleOptions $options
     *
     * @return void
     */
    public function __construct(EntityManagerInterface $em, ModuleOptions $options)
    {
        $this->em       = $em;
        $this->options  = $options;
    }

    /**
     * Finds roles of a user by his/her id
     *
     * @param  int                                        $userId
     * @return array
     */
    public function findByUserId($userId)
    {
        $er = $this->em->getRepository($this->options->getUserRoleLinkerEntityClass());

        return $er->findBy(array('userId' => $userId));

    }

    /**
     * {@inheritDoc}
     */
    public function findByUser(UserInterface $user)
    {
        return $this->findByUserId($user->getId());
    }
}
