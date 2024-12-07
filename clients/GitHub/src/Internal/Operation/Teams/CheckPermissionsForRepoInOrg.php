<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Teams;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos\Owner\Repo;
use ApiClients\Client\GitHub\Schema\TeamRepository;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

use function explode;
use function json_decode;

final class CheckPermissionsForRepoInOrg
{
    public const OPERATION_ID    = 'teams/check-permissions-for-repo-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The slug of the team name. **/
    private string $teamSlug;
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Repo $hydrator, string $org, string $teamSlug, string $owner, string $repo)
    {
        $this->org                     = $org;
        $this->teamSlug                = $teamSlug;
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}'))->expand(['org' => $this->org, 'owner' => $this->owner, 'repo' => $this->repo, 'team_slug' => $this->teamSlug]));
    }

    public function createResponse(ResponseInterface $response): TeamRepository|WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Alternative response with repository permissions
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(TeamRepository::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(TeamRepository::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Response if team has permission for the repository. This is the response when the repository media type hasn't been provded in the Accept header.
             **/
            case 204:
                return new WithoutBody(204, []);
            /**
             * Not Found if team does not have permission for the repository
             **/

            case 404:
                return new WithoutBody(404, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
