<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteInvitation
{
    public const OPERATION_ID    = 'repos/delete-invitation';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/invitations/{invitation_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/invitations/{invitation_id}';
    private string $owner;
    private string $repo;
    /**invitation_id parameter**/
    private int $invitationId;

    public function __construct(string $owner, string $repo, int $invitationId)
    {
        $this->owner        = $owner;
        $this->repo         = $repo;
        $this->invitationId = $invitationId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{invitation_id}'], [$this->owner, $this->repo, $this->invitationId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
