<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Pulls;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\RequestedReviewers;
use ApiClients\Client\GitHub\Schema\PullRequestReviewRequest;
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

final class ListRequestedReviewers
{
    public const OPERATION_ID    = 'pulls/list-requested-reviewers';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The number that identifies the pull request. **/
    private int $pullNumber;

    public function __construct(private SchemaValidator $responseSchemaValidator, private RequestedReviewers $hydrator, string $owner, string $repo, int $pullNumber)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->pullNumber              = $pullNumber;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers'))->expand(['owner' => $this->owner, 'pull_number' => $this->pullNumber, 'repo' => $this->repo]));
    }

    public function createResponse(ResponseInterface $response): PullRequestReviewRequest
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(PullRequestReviewRequest::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(PullRequestReviewRequest::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
