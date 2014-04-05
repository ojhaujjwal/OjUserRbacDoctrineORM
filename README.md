OjUserRbacDoctrineORM
=====================

A Zend Framework 2 module to easily integrate ZfcUserDoctrineORM and ZfcRbac

Doctrine ORM Storage Adapter for [UserRbac](https://github.com/ojhaujjwal/UserRbac) module.

## Installation
1. Add `"ujjwal/user-rbac-doctrine-orm": "dev-master"` to your composer.json and run `php composer.phar update`
2. Run command `vendor/bin/doctrine-module orm:schema-tool:update --force` to update schema
4. Enable this module and `UserRbac` in `config/application.config.php`
5. Copy file located in `vendor/ujjwal/user-rbac/config/user-rbac.global.php` to `./config/autoload/user-rbac.global.php` and change the values as you wish
