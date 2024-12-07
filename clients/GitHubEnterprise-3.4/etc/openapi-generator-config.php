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
            '../../../etc/specs/GitHubEnterprise-3.4/current.spec.yaml',
            null,
            new Gathering\Schemas(
                true,
                true,
            )
        ),
        [
            new Package(
                new Package\Metadata(
                    'GitHub Enterprise (v3.4)',
                    'Fully type safe generated Non-Blocking first GitHub Enterprise (v3.4) REST API client',
                    [],
                ),
                'api-clients',
                'github-enterprise',
                'git@github.com:php-api-clients/github-enterprise.git',
                'v0.1.3.4.x',
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
                    'ApiClients\Client\GitHubEnterprise',
                    'ApiClients\Tests\Client\GitHubEnterprise',
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
