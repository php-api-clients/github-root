<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Teams;

use ApiClients\Client\GitHubEnterprise\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function json_encode;
use function str_replace;

final class AddOrUpdateRepoPermissionsInOrg
{
    public const OPERATION_ID    = 'teams/add-or-update-repo-permissions-in-org';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}';
    private readonly SchemaValidator $requestSchemaValidator;
    private string $org;
    /**team_slug parameter**/
    private string $teamSlug;
    private string $owner;
    private string $repo;

    public function __construct(SchemaValidator $requestSchemaValidator, string $org, string $teamSlug, string $owner, string $repo)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->org                    = $org;
        $this->teamSlug               = $teamSlug;
        $this->owner                  = $owner;
        $this->repo                   = $repo;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Teams\AddOrUpdateRepoPermissionsInOrg\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{org}', '{team_slug}', '{owner}', '{repo}'], [$this->org, $this->teamSlug, $this->owner, $this->repo], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
