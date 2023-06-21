<?php

namespace Container1K1pQWy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserLocaleSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\UserLocaleSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\UserLocaleSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventSubscriber/UserLocaleSubscriber.php';

        return $container->privates['App\\EventSubscriber\\UserLocaleSubscriber'] = new \App\EventSubscriber\UserLocaleSubscriber(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}