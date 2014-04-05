OjUserRbacDoctrineORM
=====================

[![Master Branch Build Status](https://api.travis-ci.org/ojhaujjwal/OjUserRbacDoctrineORM.png)](http://travis-ci.org/ojhaujjwal/OjUserRbacDoctrineORM)
[![Latest Stable Version](https://poser.pugx.org/ujjwal/user-rbac-doctrine-orm/v/stable.png)](https://packagist.org/packages/ujjwal/user-rbac-doctrine-orm)
[![Latest Unstable Version](https://poser.pugx.org/ujjwal/user-rbac-doctrine-orm/v/unstable.png)](https://packagist.org/packages/ujjwal/user-rbac-doctrine-orm)
[![Total Downloads](https://poser.pugx.org/ujjwal/user-rbac-doctrine-orm/downloads.png)](https://packagist.org/packages/ujjwal/user-rbac-doctrine-orm)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ojhaujjwal/OjUserRbacDoctrineORM/badges/quality-score.png?s=575410c3a1cce883dc209b189ee3cbd456149263)](https://scrutinizer-ci.com/g/ojhaujjwal/OjUserRbacDoctrineORM/)

A Zend Framework 2 module to easily integrate [ZfcUserDoctrineORM](https://github.com/ZF-Commons/ZfcUserDoctrineORM) and [ZfcRbac]()

Doctrine ORM Storage Adapter for [UserRbac](https://github.com/ojhaujjwal/UserRbac) module.

## Installation
1. Add `"ujjwal/user-rbac-doctrine-orm": "dev-master"` to your composer.json and run `php composer.phar update`
2. Run command `vendor/bin/doctrine-module orm:schema-tool:update --force` to update schema
4. Enable this module and `UserRbac` in `config/application.config.php`
5. Copy file located in `vendor/ujjwal/user-rbac/config/user-rbac.global.php` to `./config/autoload/user-rbac.global.php` and change the values as you wish
