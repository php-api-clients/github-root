<?php

declare(strict_types=1);

use ApiClients\Tools\OpenApiClientGenerator\Generator;
use OpenAPITools\Configuration\Configuration;
use OpenAPITools\Configuration\Gathering;
use OpenAPITools\Configuration\Package;
use OpenAPITools\Configuration\State;
use OpenAPITools\Utils\Namespace_;
use PhpParser\BuilderFactory;

return (static function (): Configuration {
    $builderFactory = new BuilderFactory();

    return new Configuration(
        new State(
            'etc/openapi-client-generator.state',
        ),
        new Gathering(
            '../../../etc/specs/GitHub/current.spec.yaml',
            null,
            new Gathering\Schemas(
                true,
                true,
            )
        ),
        [
            new Package(
                new Package\Metadata(
                    'GitHub',
                    'Fully type safe generated Non-Blocking first GitHub REST API client',
                    [],
                ),
                'api-clients',
                'github',
                'git@github.com:php-api-clients/github.git',
                'v0.2.x',
                null,
                new Package\Templates(
                    dirname(__DIR__) . '/templates',
                    [],
                ),
                new Package\Destination(
                    '../',
                    'src',
                    'tests',
                ),
                new Namespace_(
                    'ApiClients\Client\GitHub',
                    'ApiClients\Tests\Client\GitHub',
                ),
                new Package\QA(
                    phpcs: new Package\QA\Tool(true, null),
                    phpstan: new Package\QA\Tool(
                        true,
                        'etc/phpstan-extension.neon',
                    ),
                    psalm: new Package\QA\Tool(false, null),
                ),
                new Package\State(
                    [
                        'composer.json',
                        'composer.lock',
                        '../../composer.json',
                        '../../composer.lock',
                    ],
                ),
                [
                    new OpenAPITools\Generator\Schema\Schema($builderFactory),
                    new OpenAPITools\Generator\Hydrator\Hydrator($builderFactory),
                    new OpenAPITools\Generator\Templates\Templates(),
                    new Generator\Paths($builderFactory, true, true),
                    new Generator\ClientInterface($builderFactory, true, true),
                    new Generator\Client($builderFactory, true, true),
                ]
            ),
        ],
    );
})();
