<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Repos;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteInvitation
{
    public const OPERATION_ID    = 'repos/delete-invitation';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/invitations/{invitation_id}';
    /**invitation_id parameter **/
    private int $invitationId;

    public function __construct(private string $owner, private string $repo, int $invitationId)
    {
        $this->invitationId = $invitationId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{owner}', '{repo}', '{invitation_id}'], [$this->owner, $this->repo, $this->invitationId], '/repos/{owner}/{repo}/invitations/{invitation_id}'));
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
