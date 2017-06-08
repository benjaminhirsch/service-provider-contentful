<?php
declare(strict_types=1);

namespace ServiceProviderContentful;

use Contentful\Delivery\Client;
use ServiceProviderContentful\Exception\InvalidArgumentException;

class ContentfulClientFactory
{

    /**
     * @param array $config
     * @return Client
     * @throws InvalidArgumentException
     */
    public static function factory(array $config)
    {
        if (!isset($config['spaceId'])) {
            throw new InvalidArgumentException('Missing Space ID (spaceid)');
        }

        if (!isset($config['token'])) {
            throw new InvalidArgumentException('Missing Access Token (token)');
        }

        if (!isset($config['defaultLocale'])) {
            throw new InvalidArgumentException('Missing default locale (defaultLocale)');
        }

        if (!isset($config['preview'])) {
            throw new InvalidArgumentException('Missing preview (preview)');
        }

        return new Client(
            $config['token'],
            $config['spaceId'],
            (bool)$config['preview'],
            $config['defaultLocale'],
            (isset($config['options'])) ? $config['options'] : []
        );
    }
}