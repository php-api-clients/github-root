<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Reactions;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteForIssue
{
    public const OPERATION_ID    = 'reactions/delete-for-issue';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The number that identifies the issue. **/
    private int $issueNumber;
    /**The unique identifier of the reaction. **/
    private int $reactionId;

    public function __construct(string $owner, string $repo, int $issueNumber, int $reactionId)
    {
        $this->owner       = $owner;
        $this->repo        = $repo;
        $this->issueNumber = $issueNumber;
        $this->reactionId  = $reactionId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{owner}', '{repo}', '{issue_number}', '{reaction_id}'], [$this->owner, $this->repo, $this->issueNumber, $this->reactionId], '/repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}'));
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
