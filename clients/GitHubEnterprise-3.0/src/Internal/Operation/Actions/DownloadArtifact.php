<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Actions;

use ApiClients\Tools\OpenApiClient\Utils\Response\Header;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DownloadArtifact
{
    public const OPERATION_ID    = 'actions/download-artifact';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}';
    /**artifact_id parameter **/
    private int $artifactId;

    public function __construct(private string $owner, private string $repo, int $artifactId, private string $archiveFormat)
    {
        $this->artifactId = $artifactId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{artifact_id}', '{archive_format}'], [$this->owner, $this->repo, $this->artifactId, $this->archiveFormat], '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 302:
                return new WithoutBody(302, [new Header('location', $response->getHeaderLine('Location'))]);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
