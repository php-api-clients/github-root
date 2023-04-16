<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteDeployKey
{
    public const OPERATION_ID    = 'repos/delete-deploy-key';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/keys/{key_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/keys/{key_id}';
    private string $owner;
    private string $repo;
    /**key_id parameter**/
    private int $keyId;

    public function __construct(string $owner, string $repo, int $keyId)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
        $this->keyId = $keyId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{key_id}'], [$this->owner, $this->repo, $this->keyId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
