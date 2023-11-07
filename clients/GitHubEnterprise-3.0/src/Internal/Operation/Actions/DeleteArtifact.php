<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Actions;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteArtifact
{
    public const OPERATION_ID    = 'actions/delete-artifact';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/actions/artifacts/{artifact_id}';
    /**artifact_id parameter **/
    private int $artifactId;

    public function __construct(private string $owner, private string $repo, int $artifactId)
    {
        $this->artifactId = $artifactId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{owner}', '{repo}', '{artifact_id}'], [$this->owner, $this->repo, $this->artifactId], '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}'));
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
