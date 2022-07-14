<?php

use Psr\Container\ContainerInterface;
use ZnCore\Container\Interfaces\ContainerConfiguratorInterface;
use ZnDomain\EntityManager\Interfaces\EntityManagerConfiguratorInterface;
use ZnDomain\EntityManager\Interfaces\EntityManagerInterface;
use ZnDomain\EntityManager\Libs\EntityManager;
use ZnDomain\EntityManager\Libs\EntityManagerConfigurator;

return function (ContainerConfiguratorInterface $containerConfigurator) {
    $containerConfigurator->singleton(EntityManagerInterface::class, function (ContainerInterface $container) {
        $em = EntityManager::getInstance($container);
//            $eloquentOrm = $container->get(EloquentOrm::class);
//            $em->addOrm($eloquentOrm);
        return $em;
    });

    $containerConfigurator->singleton(EntityManagerConfiguratorInterface::class, EntityManagerConfigurator::class);
};
