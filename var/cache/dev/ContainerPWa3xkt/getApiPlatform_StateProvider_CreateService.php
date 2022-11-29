<?php

namespace ContainerPWa3xkt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_StateProvider_CreateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.state_provider.create' shared service.
     *
     * @return \ApiPlatform\State\CreateProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'CreateProvider.php';

        return $container->privates['api_platform.state_provider.create'] = new \ApiPlatform\State\CreateProvider(($container->privates['api_platform.doctrine.orm.state.item_provider'] ?? $container->load('getApiPlatform_Doctrine_Orm_State_ItemProviderService')));
    }
}
