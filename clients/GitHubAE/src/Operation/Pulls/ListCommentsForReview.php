<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\Pulls;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class ListCommentsForReview
{
    public const OPERATION_ID = 'pulls/list-comments-for-review';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/comments';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/comments';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The number that identifies the pull request.**/
    private int $pull_number;
    /**The unique identifier of the review.**/
    private int $review_id;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Comments $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Comments $hydrator, string $owner, string $repo, int $pull_number, int $review_id, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->pull_number = $pull_number;
        $this->review_id = $review_id;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{pull_number}', '{review_id}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->pull_number, $this->review_id, $this->per_page, $this->page), self::PATH . '?per_page={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<Schema\ReviewComment>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\ReviewComment::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\ReviewComment {
                            return $this->hydrator->hydrateObject(Schema\ReviewComment::class, $body);
                        });
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\BasicError::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
