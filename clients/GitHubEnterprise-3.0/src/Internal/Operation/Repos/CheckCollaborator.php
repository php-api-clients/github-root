<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class CheckCollaborator
{
    public const OPERATION_ID    = 'repos/check-collaborator';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/collaborators/{username}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/collaborators/{username}';

    public function __construct(private string $owner, private string $repo, private string $username)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{username}'], [$this->owner, $this->repo, $this->username], self::PATH));
    }

    /** @return array{code: int} */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response if user is a collaborator
             **/
            case 204:
                return ['code' => 204];
            /**
             * Not Found if user is not a collaborator
             **/

            case 404:
                return ['code' => 404];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
