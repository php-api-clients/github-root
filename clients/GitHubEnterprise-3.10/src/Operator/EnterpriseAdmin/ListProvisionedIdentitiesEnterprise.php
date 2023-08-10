<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListProvisionedIdentitiesEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/list-provisioned-identities-enterprise';
    public const OPERATION_MATCH = 'GET /scim/v2/Users';
    private const METHOD         = 'GET';
    private const PATH           = '/scim/v2/Users';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Scim\V2\Users $hydrator)
    {
    }

    /** @return PromiseInterface<ScimEnterpriseUserList|array> **/
    public function call(string $filter, string $excludedAttributes, int $startIndex = 1, int $count = 30): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterprise($this->responseSchemaValidator, $this->hydrator, $filter, $excludedAttributes, $startIndex, $count);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ScimEnterpriseUserList|array {
            return $operation->createResponse($response);
        });
    }
}
