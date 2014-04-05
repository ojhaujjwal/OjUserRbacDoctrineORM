<?php
namespace OjUserRbacDoctrineORM\Mapper;

use Doctrine\ORM\EntityManagerInterface;
use UserRbac\Options\ModuleOptionsInterface;
use UserRbac\Mapper\UserRoleLinkerMapperInterface;
use ZfcUser\Entity\UserInterface;

class UserRoleLinkerMapper implements UserRoleLinkerMapperInterface
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var ModuleOptionsInterface
     *
     */
    protected $options;

    /**
     * Constructor
     *
     * @param EntityManagerInterface $em
     * @param ModuleOptionsInterface $options
     *
     * @return void
     */
    public function __construct(EntityManagerInterface $em, ModuleOptionsInterface $options)
    {
        $this->em       = $em;
        $this->options  = $options;
    }

    /**
     * {@inheritDoc}
     */
    public function findByUser(UserInterface $user)
    {
        $er = $this->em->getRepository($this->options->getUserRoleLinkerEntityClass());

        return $er->findBy(array('user' => $user));
    }
}
