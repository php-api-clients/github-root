<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Get;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Emojis
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json | array{code: int}) */
    public function get(array $params): Json|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Emojis::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Emojis::class] = $this->hydrators->getObjectMapperOperation🌀Emojis();
        }

        $operator = new Operator\Emojis\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Emojis::class]);

        return $operator->call();
    }
}
