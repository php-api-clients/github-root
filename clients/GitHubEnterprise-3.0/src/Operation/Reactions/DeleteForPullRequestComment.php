<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Reactions;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class DeleteForPullRequestComment
{
    public const OPERATION_ID = 'reactions/delete-for-pull-request-comment';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions/{reaction_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions/{reaction_id}';
    private string $owner;
    private string $repo;
    /**comment_id parameter**/
    private int $comment_id;
    private int $reaction_id;
    public function __construct(string $owner, string $repo, int $comment_id, int $reaction_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->comment_id = $comment_id;
        $this->reaction_id = $reaction_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{comment_id}', '{reaction_id}'), array($this->owner, $this->repo, $this->comment_id, $this->reaction_id), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
