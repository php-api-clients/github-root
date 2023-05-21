<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListForUser
{
    public const OPERATION_ID    = 'repos/list-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/repos';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}/repos';
    private string $username;
    /**Can be one of `asc` or `desc`. Default: `asc` when using `full_name`, otherwise `desc` **/
    private string $direction;
    /**Can be one of `all`, `owner`, `member`. **/
    private string $type;
    /**Can be one of `created`, `updated`, `pushed`, `full_name`. **/
    private string $sort;
    /**Results per page (max 100) **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $username, string $direction, string $type = 'owner', string $sort = 'full_name', int $perPage = 30, int $page = 1)
    {
        $this->username  = $username;
        $this->direction = $direction;
        $this->type      = $type;
        $this->sort      = $sort;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{username}', '{direction}', '{type}', '{sort}', '{per_page}', '{page}'], [$this->username, $this->direction, $this->type, $this->sort, $this->perPage, $this->page], self::PATH . '?direction={direction}&type={type}&sort={sort}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
