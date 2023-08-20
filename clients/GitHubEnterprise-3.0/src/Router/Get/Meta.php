<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Get;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\ApiOverview;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Meta\Root\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Meta
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function root(array $params): Ok|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Root::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Root::class] = $this->hydrators->getObjectMapperOperation🌀Root();
        }

        $operator = new Operator\Meta\Root($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Root::class]);

        return $operator->call();
    }

    /** @return (Schema\ApiOverview | array{code: int}) */
    public function get(array $params): ApiOverview|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Meta::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Meta::class] = $this->hydrators->getObjectMapperOperation🌀Meta();
        }

        $operator = new Operator\Meta\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Meta::class]);

        return $operator->call();
    }

    /** @return */
    public function getOctocat(array $params): ResponseInterface|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('s', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: s');
        }

        $arguments['s'] = $params['s'];
        unset($params['s']);
        $operator = new Operator\Meta\GetOctocat($this->browser, $this->authentication);

        return $operator->call($arguments['s']);
    }

    /** @return */
    public function getZen(array $params): string|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Zen::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Zen::class] = $this->hydrators->getObjectMapperOperation🌀Zen();
        }

        $operator = new Operator\Meta\GetZen($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Zen::class]);

        return $operator->call();
    }
}
