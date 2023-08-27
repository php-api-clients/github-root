<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Pulls;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;
use function str_replace;

final class ListCommentsForReviewListing
{
    public const OPERATION_ID    = 'pulls/list-comments-for-review';
    public const OPERATION_MATCH = 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/comments';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/comments';
    /**review_id parameter **/
    private int $reviewId;
    /**Results per page (max 100) **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Comments $hydrator, private string $owner, private string $repo, private int $pullNumber, int $reviewId, int $perPage = 30, int $page = 1)
    {
        $this->reviewId = $reviewId;
        $this->perPage  = $perPage;
        $this->page     = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{pull_number}', '{review_id}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->pullNumber, $this->reviewId, $this->perPage, $this->page], self::PATH . '?per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\ReviewComment> */
    public function createResponse(ResponseInterface $response): Observable
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\ReviewComment {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ReviewComment::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrators->hydrateObject(Schema\ReviewComment::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
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
