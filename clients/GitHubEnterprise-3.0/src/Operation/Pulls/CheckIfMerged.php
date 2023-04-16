<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Pulls;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CheckIfMerged
{
    public const OPERATION_ID    = 'pulls/check-if-merged';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pulls/{pull_number}/merge';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/pulls/{pull_number}/merge';
    private string $owner;
    private string $repo;
    private int $pullNumber;

    public function __construct(string $owner, string $repo, int $pullNumber)
    {
        $this->owner      = $owner;
        $this->repo       = $repo;
        $this->pullNumber = $pullNumber;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{pull_number}'], [$this->owner, $this->repo, $this->pullNumber], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
