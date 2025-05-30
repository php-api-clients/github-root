<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Issues;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class RemoveAllLabels
{
    public const OPERATION_ID    = 'issues/remove-all-labels';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels';
    /**issue_number parameter **/
    private int $issueNumber;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels $hydrator, private string $owner, private string $repo, int $issueNumber)
    {
        $this->issueNumber = $issueNumber;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{owner}', '{repo}', '{issue_number}'], [$this->owner, $this->repo, $this->issueNumber], '/repos/{owner}/{repo}/issues/{issue_number}/labels'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Gone
                     **/
                    case 410:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(410, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

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
