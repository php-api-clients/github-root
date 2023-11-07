<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Teams;

use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_encode;
use function str_replace;

final class AddOrUpdateRepoPermissionsInOrg
{
    public const OPERATION_ID    = 'teams/add-or-update-repo-permissions-in-org';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}';
    /**team_slug parameter **/
    private string $teamSlug;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private string $org, string $teamSlug, private string $owner, private string $repo)
    {
        $this->teamSlug = $teamSlug;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Teams\AddOrUpdateRepoPermissionsInOrg\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('PUT', str_replace(['{org}', '{team_slug}', '{owner}', '{repo}'], [$this->org, $this->teamSlug, $this->owner, $this->repo], '/orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
