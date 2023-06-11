<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListPreReceiveHooksForRepo
{
    public const OPERATION_ID    = 'enterprise-admin/list-pre-receive-hooks-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pre-receive-hooks';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/pre-receive-hooks';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;
    /**The direction to sort the results by. **/
    private string $direction;
    private string $sort;

    public function __construct(string $owner, string $repo, int $perPage = 30, int $page = 1, string $direction = 'desc', string $sort = 'created')
    {
        $this->owner     = $owner;
        $this->repo      = $repo;
        $this->perPage   = $perPage;
        $this->page      = $page;
        $this->direction = $direction;
        $this->sort      = $sort;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{per_page}', '{page}', '{direction}', '{sort}'], [$this->owner, $this->repo, $this->perPage, $this->page, $this->direction, $this->sort], self::PATH . '?per_page={per_page}&page={page}&direction={direction}&sort={sort}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
