<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Teams;

use ApiClients\Client\GitHubEnterprise\Internal;
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

final class CheckPermissionsForRepoLegacy
{
    public const OPERATION_ID    = 'teams/check-permissions-for-repo-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/repos/{owner}/{repo}';
    private const METHOD         = 'GET';
    private const PATH           = '/teams/{team_id}/repos/{owner}/{repo}';

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo $hydrator, private int $teamId, private string $owner, private string $repo)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{team_id}', '{owner}', '{repo}'], [$this->teamId, $this->owner, $this->repo], self::PATH));
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
                     * Alternative response with extra repository information
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TeamRepository::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\TeamRepository::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Response if repository is managed by this team
             **/
            case 204:
                return ['code' => 204];
            /**
             * Not Found if repository is not managed by this team
             **/

            case 404:
                return ['code' => 404];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
