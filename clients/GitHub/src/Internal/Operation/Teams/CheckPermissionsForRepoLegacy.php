<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Teams;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo;
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

final class CheckPermissionsForRepoLegacy
{
    public const OPERATION_ID    = 'teams/check-permissions-for-repo-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/repos/{owner}/{repo}';
    /**The unique identifier of the team. **/
    private int $teamId;
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Repo $hydrator, int $teamId, string $owner, string $repo)
    {
        $this->teamId                  = $teamId;
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/teams/{team_id}/repos/{owner}/{repo}'))->expand(['owner' => $this->owner, 'repo' => $this->repo, 'team_id' => $this->teamId]));
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
                     * Alternative response with extra repository information
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(TeamRepository::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(TeamRepository::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Response if repository is managed by this team
             **/
            case 204:
                return new WithoutBody(204, []);
            /**
             * Not Found if repository is not managed by this team
             **/

            case 404:
                return new WithoutBody(404, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
