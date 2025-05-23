<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Pulls;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class CheckIfMerged
{
    public const OPERATION_ID    = 'pulls/check-if-merged';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pulls/{pull_number}/merge';

    public function __construct(private string $owner, private string $repo, private int $pullNumber)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{pull_number}'], [$this->owner, $this->repo, $this->pullNumber], '/repos/{owner}/{repo}/pulls/{pull_number}/merge'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response if pull request has been merged
             **/
            case 204:
                return new WithoutBody(204, []);
            /**
             * Not Found if pull request has not been merged
             **/

            case 404:
                return new WithoutBody(404, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
