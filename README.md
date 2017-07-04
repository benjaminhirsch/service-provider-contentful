# Contenful PHP SDK with Service Provider capabilities
Zend Component Config Provider for Contentful PHP SDK Client. Usage with Zend Expressive or any Zend Config Aggregator / Zend Component compatible application.

## Installation

Via composer:

```bash
$ composer require b3n/service-provider-contentful
```

## Configuration

In the general it's enough to define the delivery API, but you can also define multiple clients e.g. for the preview API:

```php
return [
    'contentful' => [
        'my-servicename' => [
            'token' => '',              // Your access token
            'spaceId' => '',            // Your space id
            'defaultLocale' => 'de-de',
            'preview' => false
        ],
        'my-servicename-preview' => [
            'token' => '',              // Your preview access token
            'spaceId' => '',            // Your space id
            'defaultLocale' => 'de-de',
            'preview' => true
            'options' => [
                // You can pass the official client options here if necessary
            ]
        ]
    ]
];
```

## Usage

```php
$container->get('my-servicename'); // returns the fully configured Contentful client
```

### Contentful PHP SDK documentation
https://github.com/contentful/contentful.php