<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Teams;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ExternalIdpGroupInfoForOrg
{
    public const OPERATION_ID    = 'teams/external-idp-group-info-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/external-group/{group_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/external-group/{group_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\ExternalGroup\GroupId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<ExternalGroup>
     **/
    public function call(string $org, int $groupId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Teams\ExternalIdpGroupInfoForOrg($this->responseSchemaValidator, $this->hydrator, $org, $groupId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ExternalGroup {
            return $operation->createResponse($response);
        });
    }
}
