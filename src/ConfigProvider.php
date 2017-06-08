<?php
declare(strict_types=1);

namespace ServiceProviderContentful;

use ServiceProviderContentful\Service\ContentfulClientAbstractServiceFactory;

class ConfigProvider
{
    /**
     * Return default configuration for contentful
     */
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies()
        ];
    }

    private function getDependencies(): array
    {
        return [
            'abstract_factories' => [
                ContentfulClientAbstractServiceFactory::class
            ]
        ];
    }
}