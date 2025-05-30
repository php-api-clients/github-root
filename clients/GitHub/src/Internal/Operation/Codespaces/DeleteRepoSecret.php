<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Codespaces;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteRepoSecret
{
    public const OPERATION_ID    = 'codespaces/delete-repo-secret';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/codespaces/secrets/{secret_name}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The name of the secret. **/
    private string $secretName;

    public function __construct(string $owner, string $repo, string $secretName)
    {
        $this->owner      = $owner;
        $this->repo       = $repo;
        $this->secretName = $secretName;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{owner}', '{repo}', '{secret_name}'], [$this->owner, $this->repo, $this->secretName], '/repos/{owner}/{repo}/codespaces/secrets/{secret_name}'));
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
