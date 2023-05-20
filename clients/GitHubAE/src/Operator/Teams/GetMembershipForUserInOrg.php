<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Teams;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\TeamMembership;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetMembershipForUserInOrg
{
    public const OPERATION_ID    = 'teams/get-membership-for-user-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/teams/{team_slug}/memberships/{username}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/memberships/{username}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Memberships\Username $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(TeamMembership|array)>
     **/
    public function call(string $org, string $teamSlug, string $username): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Teams\GetMembershipForUserInOrg($this->responseSchemaValidator, $this->hydrator, $org, $teamSlug, $username);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): TeamMembership|array {
            return $operation->createResponse($response);
        });
    }
}
