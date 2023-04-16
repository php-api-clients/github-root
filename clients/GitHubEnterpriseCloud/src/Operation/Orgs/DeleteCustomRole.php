<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteCustomRole
{
    public const OPERATION_ID    = 'orgs/delete-custom-role';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/custom_roles/{role_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/custom_roles/{role_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The unique identifier of the role.**/
    private int $roleId;

    public function __construct(string $org, int $roleId)
    {
        $this->org    = $org;
        $this->roleId = $roleId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{role_id}'], [$this->org, $this->roleId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
