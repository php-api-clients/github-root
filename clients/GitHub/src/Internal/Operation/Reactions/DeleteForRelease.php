<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Reactions;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

final class DeleteForRelease
{
    public const OPERATION_ID    = 'reactions/delete-for-release';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/releases/{release_id}/reactions/{reaction_id}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The unique identifier of the release. **/
    private int $releaseId;
    /**The unique identifier of the reaction. **/
    private int $reactionId;

    public function __construct(string $owner, string $repo, int $releaseId, int $reactionId)
    {
        $this->owner      = $owner;
        $this->repo       = $repo;
        $this->releaseId  = $releaseId;
        $this->reactionId = $reactionId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', (string) (new UriTemplate('/repos/{owner}/{repo}/releases/{release_id}/reactions/{reaction_id}'))->expand(['owner' => $this->owner, 'reaction_id' => $this->reactionId, 'release_id' => $this->releaseId, 'repo' => $this->repo]));
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
