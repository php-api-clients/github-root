<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Put;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class OauthAuthorizations
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Schema\Authorization */
    public function getOrCreateAuthorizationForAppAndFingerprint(array $params): Authorization|array
    {
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists('fingerprint', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: fingerprint');
        }

        $arguments['fingerprint'] = $params['fingerprint'];
        unset($params['fingerprint']);
        $operator = new Internal\Operator\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Authorizations🌀Clients🌀ClientId🌀Fingerprint());

        return $operator->call($arguments['client_id'], $arguments['fingerprint'], $params);
    }

    /** @return Schema\Authorization|array{code:int} */
    public function getOrCreateAuthorizationForApp(array $params): Authorization|array
    {
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        $operator = new Internal\Operator\OauthAuthorizations\GetOrCreateAuthorizationForApp($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Authorizations🌀Clients🌀ClientId());

        return $operator->call($arguments['client_id'], $params);
    }
}
