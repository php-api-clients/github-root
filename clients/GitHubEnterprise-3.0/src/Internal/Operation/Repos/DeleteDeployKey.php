<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Repos;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteDeployKey
{
    public const OPERATION_ID    = 'repos/delete-deploy-key';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/keys/{key_id}';
    /**key_id parameter **/
    private int $keyId;

    public function __construct(private string $owner, private string $repo, int $keyId)
    {
        $this->keyId = $keyId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{owner}', '{repo}', '{key_id}'], [$this->owner, $this->repo, $this->keyId], '/repos/{owner}/{repo}/keys/{key_id}'));
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
