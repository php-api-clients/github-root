<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Repos;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
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

final class CompareCommits
{
    public const OPERATION_ID    = 'repos/compare-commits';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/compare/{basehead}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/compare/{basehead}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    /**The base branch and head branch to compare. This parameter expects the format `{base}...{head}`. **/
    private string $basehead;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Compare\Basehead $hydrator, string $owner, string $repo, string $basehead)
    {
        $this->owner    = $owner;
        $this->repo     = $repo;
        $this->basehead = $basehead;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{basehead}'], [$this->owner, $this->repo, $this->basehead], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\CommitComparison
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\CommitComparison::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\CommitComparison::class, $body);
                    /**
                     * Internal Error
                     **/

                    case 500:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(500, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
