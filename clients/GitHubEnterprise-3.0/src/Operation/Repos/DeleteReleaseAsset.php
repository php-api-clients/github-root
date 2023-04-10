<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Repos;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class DeleteReleaseAsset
{
    public const OPERATION_ID = 'repos/delete-release-asset';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/releases/assets/{asset_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/repos/{owner}/{repo}/releases/assets/{asset_id}';
    private string $owner;
    private string $repo;
    /**asset_id parameter**/
    private int $assetId;
    public function __construct(string $owner, string $repo, int $assetId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->assetId = $assetId;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{asset_id}'), array($this->owner, $this->repo, $this->assetId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
