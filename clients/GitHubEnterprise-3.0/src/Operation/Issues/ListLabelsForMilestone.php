<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Issues;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListLabelsForMilestone
{
    public const OPERATION_ID    = 'issues/list-labels-for-milestone';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/milestones/{milestone_number}/labels';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/milestones/{milestone_number}/labels';
    /**milestone_number parameter **/
    private int $milestoneNumber;
    /**Results per page (max 100) **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private string $owner, private string $repo, int $milestoneNumber, int $perPage = 30, int $page = 1)
    {
        $this->milestoneNumber = $milestoneNumber;
        $this->perPage         = $perPage;
        $this->page            = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{milestone_number}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->milestoneNumber, $this->perPage, $this->page], self::PATH . '?per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
