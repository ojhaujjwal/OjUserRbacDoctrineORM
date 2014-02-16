OjUserRbacDoctrineORM
=====================

A Zend Framework 2 module to easily integrate ZfcUserDoctrineORM and ZfcRbac


Doctrine ORM Storage Adapter for [UserRbac](https://github.com/ojhaujjwal/UserRbac) module.

## Installation
1. Add `"ujjwal/user-rbac-doctrine-orm": "dev-master"` to your composer.json and run php composer.phar update
2. Run command `vendor/bin/doctrine-module orm:schema-tool:update` to update schema
4. Enable this module and `UserRbac` in config/application.config.php
5. Copy file located in vendor/ujjwal/user-rbac/config/user-rbac.global.php to ./config/autoload/user-rbac.global.php and change the values as you wish

## Avaliable Options
1. Check the options of `UserRbac` available in `vendor/ujjwal/user-rbac/user-rbac.global.php`
2. `enable_default_entities` - Boolean value, determines if the default entity should be enabled. Set it to false in order to extend the default entity. Default is true.

## Configuration
If you do not already have a valid `Doctrine\ORM\EntityManager` in your service manager configuration, put the following in `./module/MyModule/config/module.config.php`:

```php
return array(
    'aliases' => array(
        'Doctrine\ORM\EntityManager' => 'My\EntityManager',

    ),
);
```


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/ojhaujjwal/ojuserrbacdoctrineorm/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

