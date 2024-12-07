<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Put;

use ApiClients\Client\GitHub\Internal\Hydrators;
use ApiClients\Client\GitHub\Internal\Operator\Interactions\SetRestrictionsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Interactions\SetRestrictionsForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Interactions\SetRestrictionsForRepo;
use ApiClients\Client\GitHub\Schema\InteractionLimitResponse;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Interactions
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function setRestrictionsForRepo(array $params): InteractionLimitResponse|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        $operator = new SetRestrictionsForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀InteractionLimits());

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function setRestrictionsForOrg(array $params): InteractionLimitResponse
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new SetRestrictionsForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀InteractionLimits());

        return $operator->call($arguments['org'], $params);
    }

    /** @return */
    public function setRestrictionsForAuthenticatedUser(array $params): InteractionLimitResponse
    {
        $operator = new SetRestrictionsForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀InteractionLimits());

        return $operator->call($params);
    }
}
