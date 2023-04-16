<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Activity;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteRepoSubscription
{
    public const OPERATION_ID    = 'activity/delete-repo-subscription';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/subscription';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/subscription';
    private string $owner;
    private string $repo;

    public function __construct(string $owner, string $repo)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
