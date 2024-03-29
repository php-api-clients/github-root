<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Pulls;

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

final class ListRequestedReviewers
{
    public const OPERATION_ID    = 'pulls/list-requested-reviewers';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers';
    /**Results per page (max 100) **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\RequestedReviewers $hydrator, private string $owner, private string $repo, private int $pullNumber, int $perPage = 30, int $page = 1)
    {
        $this->perPage = $perPage;
        $this->page    = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{pull_number}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->pullNumber, $this->perPage, $this->page], '/repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers' . '?per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): Schema\PullRequestReviewRequest
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\PullRequestReviewRequest::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\PullRequestReviewRequest::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
