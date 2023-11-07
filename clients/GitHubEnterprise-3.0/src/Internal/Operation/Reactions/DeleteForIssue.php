<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Reactions;

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
    /**issue_number parameter **/
    private int $issueNumber;

    public function __construct(private string $owner, private string $repo, int $issueNumber, private int $reactionId)
    {
        $this->issueNumber = $issueNumber;
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
