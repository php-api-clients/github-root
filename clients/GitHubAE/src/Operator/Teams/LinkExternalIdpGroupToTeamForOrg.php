<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Teams;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\ExternalGroup;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class LinkExternalIdpGroupToTeamForOrg
{
    public const OPERATION_ID    = 'teams/link-external-idp-group-to-team-for-org';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/teams/{team_slug}/external-groups';
    private const METHOD         = 'PATCH';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/external-groups';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Teams\TeamSlug\ExternalGroups $hydrator)
    {
    }

    /** @return PromiseInterface<ExternalGroup> **/
    public function call(string $org, string $teamSlug, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Teams\LinkExternalIdpGroupToTeamForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $teamSlug);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ExternalGroup {
            return $operation->createResponse($response);
        });
    }
}
