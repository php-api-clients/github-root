<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Get;

use ApiClients\Client\GitHub\Internal\Hydrators;
use ApiClients\Client\GitHub\Internal\Operator\Meta\Get;
use ApiClients\Client\GitHub\Internal\Operator\Meta\GetAllVersions;
use ApiClients\Client\GitHub\Internal\Operator\Meta\GetOctocat;
use ApiClients\Client\GitHub\Internal\Operator\Meta\GetZen;
use ApiClients\Client\GitHub\Schema\ApiOverview;
use ApiClients\Client\GitHub\Schema\Root;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Meta
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function root(array $params): Root
    {
        $operator = new \ApiClients\Client\GitHub\Internal\Operator\Meta\Root($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Root());

        return $operator->call();
    }

    /** @return */
    public function get(array $params): ApiOverview|WithoutBody
    {
        $operator = new Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Meta());

        return $operator->call();
    }

    /** @return */
    public function getOctocat(array $params): ResponseInterface
    {
        $arguments = [];
        if (array_key_exists('s', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: s');
        }

        $arguments['s'] = $params['s'];
        unset($params['s']);
        $operator = new GetOctocat($this->browser, $this->authentication);

        return $operator->call($arguments['s']);
    }

    /** @return Observable<string> */
    public function getAllVersions(array $params): iterable
    {
        $operator = new GetAllVersions($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Versions());

        return $operator->call();
    }

    /** @return */
    public function getZen(array $params): string
    {
        $operator = new GetZen($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Zen());

        return $operator->call();
    }
}
