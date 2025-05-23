<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Teams;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ExternalIdpGroupInfoForOrg
{
    public const OPERATION_ID    = 'teams/external-idp-group-info-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/external-group/{group_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\ExternalGroup\GroupId $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $groupId, int $perPage = 30, int $page = 1): ExternalGroup
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Teams\ExternalIdpGroupInfoForOrg($this->responseSchemaValidator, $this->hydrator, $org, $groupId, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ExternalGroup {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
