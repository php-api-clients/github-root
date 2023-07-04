<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operator\Scim;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUserList;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListProvisionedIdentities
{
    public const OPERATION_ID    = 'scim/list-provisioned-identities';
    public const OPERATION_MATCH = 'GET /scim/v2/organizations/{org}/Users';
    private const METHOD         = 'GET';
    private const PATH           = '/scim/v2/organizations/{org}/Users';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Scim\V2\Organizations\Org\Users $hydrator)
    {
    }

    /** @return PromiseInterface<(ScimUserList|array)> **/
    public function call(string $org, int $startIndex, int $count, string $filter): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Operation\Scim\ListProvisionedIdentities($this->responseSchemaValidator, $this->hydrator, $org, $startIndex, $count, $filter);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ScimUserList|array {
            return $operation->createResponse($response);
        });
    }
}
