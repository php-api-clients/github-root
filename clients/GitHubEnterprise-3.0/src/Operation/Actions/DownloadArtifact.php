<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class DownloadArtifact
{
    public const OPERATION_ID = 'actions/download-artifact';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}';
    private string $owner;
    private string $repo;
    /**artifact_id parameter**/
    private int $artifactId;
    private string $archiveFormat;
    public function __construct(string $owner, string $repo, int $artifactId, string $archiveFormat)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->artifactId = $artifactId;
        $this->archiveFormat = $archiveFormat;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{artifact_id}', '{archive_format}'), array($this->owner, $this->repo, $this->artifactId, $this->archiveFormat), self::PATH));
    }
    /**
     * @return array{code: int,location: string}
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : array
    {
        switch ($response->getStatusCode()) {
            /**Response**/
            case 302:
                return array('code' => 302, 'location' => $response->getHeaderLine('Location'));
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
