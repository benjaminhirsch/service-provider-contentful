<?php
declare(strict_types=1);

namespace ServiceProviderContentful;

use ServiceProviderContentful\Service\ContentfulClientAbstractServiceFactory;

class ConfigProvider
{
    /**
     * Return default configuration for contentful
     */
    public function __invoke()
    {
        return [
            'dependencies' => $this->getDependencies()
        ];
    }

    private function getDependencies()
    {
        return [
            'abstract_factories' => [
                ContentfulClientAbstractServiceFactory::class
            ]
        ];
    }
}