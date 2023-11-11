<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Post;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class SecretScanning
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function postSecurityProductEnablementForEnterprise(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('security_product', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: security_product');
        }

        $arguments['security_product'] = $params['security_product'];
        unset($params['security_product']);
        if (array_key_exists('enablement', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enablement');
        }

        $arguments['enablement'] = $params['enablement'];
        unset($params['enablement']);
        $operator = new Internal\Operator\SecretScanning\PostSecurityProductEnablementForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀SecurityProduct🌀Enablement());

        return $operator->call($arguments['enterprise'], $arguments['security_product'], $arguments['enablement']);
    }
}
