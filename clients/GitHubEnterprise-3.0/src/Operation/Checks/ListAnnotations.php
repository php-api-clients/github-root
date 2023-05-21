<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Checks;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListAnnotations
{
    public const OPERATION_ID    = 'checks/list-annotations';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/check-runs/{check_run_id}/annotations';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/check-runs/{check_run_id}/annotations';
    private string $owner;
    private string $repo;
    /**check_run_id parameter **/
    private int $checkRunId;
    /**Results per page (max 100) **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $owner, string $repo, int $checkRunId, int $perPage = 30, int $page = 1)
    {
        $this->owner      = $owner;
        $this->repo       = $repo;
        $this->checkRunId = $checkRunId;
        $this->perPage    = $perPage;
        $this->page       = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{check_run_id}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->checkRunId, $this->perPage, $this->page], self::PATH . '?per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
