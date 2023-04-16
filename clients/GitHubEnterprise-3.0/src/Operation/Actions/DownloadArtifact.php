<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DownloadArtifact
{
    public const OPERATION_ID    = 'actions/download-artifact';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}';
    private string $owner;
    private string $repo;
    /**artifact_id parameter**/
    private int $artifactId;
    private string $archiveFormat;

    public function __construct(string $owner, string $repo, int $artifactId, string $archiveFormat)
    {
        $this->owner         = $owner;
        $this->repo          = $repo;
        $this->artifactId    = $artifactId;
        $this->archiveFormat = $archiveFormat;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{artifact_id}', '{archive_format}'], [$this->owner, $this->repo, $this->artifactId, $this->archiveFormat], self::PATH));
    }

    /**
     * @return array{code: int,location: string}
     */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
            **/
            case 302:
                return ['code' => 302, 'location' => $response->getHeaderLine('Location')];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
