<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Get;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

final class Emojis
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json|array{code:int} */
    public function get(array $params): Json|array
    {
        $operator = new Internal\Operator\Emojis\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Emojis());

        return $operator->call();
    }
}
