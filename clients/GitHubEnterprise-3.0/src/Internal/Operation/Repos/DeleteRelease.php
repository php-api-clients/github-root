<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Repos;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteRelease
{
    public const OPERATION_ID    = 'repos/delete-release';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/releases/{release_id}';
    /**release_id parameter **/
    private int $releaseId;

    public function __construct(private string $owner, private string $repo, int $releaseId)
    {
        $this->releaseId = $releaseId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{owner}', '{repo}', '{release_id}'], [$this->owner, $this->repo, $this->releaseId], '/repos/{owner}/{repo}/releases/{release_id}'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
