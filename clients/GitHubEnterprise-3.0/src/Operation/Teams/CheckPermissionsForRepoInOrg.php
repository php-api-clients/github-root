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
    private string $org;
    /**team_slug parameter**/
    private string $teamSlug;
    private string $owner;
    private string $repo;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb\CbRepoRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb\CbRepoRcb $hydrator, string $org, string $teamSlug, string $owner, string $repo)
    {
        $this->org                     = $org;
        $this->teamSlug                = $teamSlug;
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{team_slug}', '{owner}', '{repo}'], [$this->org, $this->teamSlug, $this->owner, $this->repo], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\TeamRepository
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TeamRepository::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\TeamRepository::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
