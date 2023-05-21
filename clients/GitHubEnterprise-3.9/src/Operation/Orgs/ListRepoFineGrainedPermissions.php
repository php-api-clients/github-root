<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListRepoFineGrainedPermissions
{
    public const OPERATION_ID    = 'orgs/list-repo-fine-grained-permissions';
    public const OPERATION_MATCH = 'GET /orgs/{org}/repository-fine-grained-permissions';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/repository-fine-grained-permissions';
    /**The organization name. The name is not case sensitive. **/
    private string $org;

    public function __construct(string $org)
    {
        $this->org = $org;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}'], [$this->org], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
