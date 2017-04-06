<?php
/**
 * Created by PhpStorm.
 * User: AchRaFoS
 * Date: 02/12/2016
 * Time: 16:23
 */

namespace Omega\AppBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

class AppExtension extends Extension
{

    /**
     * @inheritDoc
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $configs       = $this->processConfiguration($configuration, $configs);

        $container->setParameter('omega.admin.import.test.start_at', $configs['import']['test']['start_at']);
        $container->setParameter('omega.admin.import.test.mapping',  $configs['import']['test']['mapping']);

    }
}