<?php
    
return array(
    'user_rbac' => array(
        'user_role_linker_entity_class' => 'OjUserRbacDoctrineORM\Entity\UserRoleLinker',
    ),
    'doctrine' => array(
        'driver' => array(
            'OjUserRbacDoctrineORM\Entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' => __DIR__ . '/xml/OjUserRbacDoctrineORM/'
            ),
            'UserRbac\Entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' => __DIR__ . '/xml/UserRbac/'
            ),
            'orm_default' => array(
                'drivers' => array(
                    'OjUserRbacDoctrineORM\Entity'  => 'OjUserRbacDoctrineORM\Entity',
                    'UserRbac\Entity' => 'UserRbac\Entity'
                )
            )
        )
    ),
);
