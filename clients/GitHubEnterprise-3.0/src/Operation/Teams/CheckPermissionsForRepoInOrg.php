<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Teams;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class CheckPermissionsForRepoInOrg
{
    public const OPERATION_ID    = 'teams/check-permissions-for-repo-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}';
    /**team_slug parameter **/
    private string $teamSlug;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos\Owner\Repo $hydrator, private string $org, string $teamSlug, private string $owner, private string $repo)
    {
        $this->teamSlug = $teamSlug;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{team_slug}', '{owner}', '{repo}'], [$this->org, $this->teamSlug, $this->owner, $this->repo], self::PATH));
    }

    /** @return Schema\TeamRepository|array{code: int} */
    public function createResponse(ResponseInterface $response): Schema\TeamRepository|array
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TeamRepository::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\TeamRepository::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Response if team has permission for the repository. This is the response when the repository media type hasn't been provded in the Accept header.
             **/
            case 204:
                return ['code' => 204];
            /**
             * Not Found if team does not have permission for the repository
             **/

            case 404:
                return ['code' => 404];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
