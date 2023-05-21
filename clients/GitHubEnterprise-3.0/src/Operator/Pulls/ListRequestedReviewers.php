<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Pulls;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\PullRequestReviewRequest;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListRequestedReviewers
{
    public const OPERATION_ID    = 'pulls/list-requested-reviewers';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\RequestedReviewers $hydrator)
    {
    }

    /**
     * @return PromiseInterface<PullRequestReviewRequest>
     **/
    public function call(string $owner, string $repo, int $pullNumber, int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Pulls\ListRequestedReviewers($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $pullNumber, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PullRequestReviewRequest {
            return $operation->createResponse($response);
        });
    }
}
