<?php

return array(
    'user_rbac' => array(
        'user_role_linker_entity_class' => 'OjUserRbacDoctrineORM\Entity\UserRoleLinker',
    ),
    'doctrine' => array(
        'driver' => array(
            'OjUserRbacDoctrineORM\Entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' => __DIR__ . '/xml/'
            ),
            'orm_default' => array(
                'drivers' => array(
                    'UserRbac\Entity' => 'UserRbac\Entity'
                )
            )
        )
    ),
);
