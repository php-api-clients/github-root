<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Repos;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class DeleteInvitation
{
    public const OPERATION_ID = 'repos/delete-invitation';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/invitations/{invitation_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/repos/{owner}/{repo}/invitations/{invitation_id}';
    private string $owner;
    private string $repo;
    /**invitation_id parameter**/
    private int $invitationId;
    public function __construct(string $owner, string $repo, int $invitationId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->invitationId = $invitationId;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{invitation_id}'), array($this->owner, $this->repo, $this->invitationId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
