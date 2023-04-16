<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteReleaseAsset
{
    public const OPERATION_ID    = 'repos/delete-release-asset';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/releases/assets/{asset_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/releases/assets/{asset_id}';
    private string $owner;
    private string $repo;
    /**asset_id parameter**/
    private int $assetId;

    public function __construct(string $owner, string $repo, int $assetId)
    {
        $this->owner   = $owner;
        $this->repo    = $repo;
        $this->assetId = $assetId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{asset_id}'], [$this->owner, $this->repo, $this->assetId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
