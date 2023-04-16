<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveStatusCheckProtection
{
    public const OPERATION_ID    = 'repos/remove-status-check-protection';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks';
    private string $owner;
    private string $repo;
    /**The name of the branch.**/
    private string $branch;

    public function __construct(string $owner, string $repo, string $branch)
    {
        $this->owner  = $owner;
        $this->repo   = $repo;
        $this->branch = $branch;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{branch}'], [$this->owner, $this->repo, $this->branch], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
