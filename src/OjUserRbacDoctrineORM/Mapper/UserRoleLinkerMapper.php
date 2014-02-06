<?php
namespace OjUserRbacDoctrineORM\Mapper;

use Doctrine\ORM\EntityManager;
use OjUserRbacDoctrineORM\Options\ModuleOptions;
use Zend\Stdlib\Hydrator\HydratorInterface;
use UserRbac\Entity\UserRoleLinkerInterface;
use UserRbac\Mapper\UserRoleLinkerMapperInterface;
use ZfcUser\Entity\UserInterface;

class UserRoleLinkerMapper implements UserRoleLinkerMapperInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;

    protected $options;

    /**
     * Constructor
     *
     * @param EntityManager $em
     * @param ModuleOptions $options
     *
     * @return void
     */
    public function __construct(EntityManager $em, ModuleOptions $options)
    {
        $this->em       = $em;
        $this->options  = $options;
    }

    /**
     * {@inheritDoc}
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

    /**
     * {@inheritDoc}
     */
    public function insert($userRoleLinker, $tableName = null, HydratorInterface $hydrator = null)
    {
        $this->checkEntity($userRoleLinker);
        return $this->persist($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function delete($userRoleLinker, $tableName = null)
    {
        $this->checkEntity($userRoleLinker);
        return $this->em->remove($userRoleLinker);
    }

    /**
     * Saves Entity 
     *
     * @param UserRoleLinkerInterface $entity
     *
     * @return UserRoleLinkerInterface
     */
    protected function persist($entity)
    {
        $this->em->persist($entity);
        $this->em->flush();

        return $entity;
    }
}
