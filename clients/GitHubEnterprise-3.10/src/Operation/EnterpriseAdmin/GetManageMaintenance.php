<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class GetManageMaintenance
{
    public const OPERATION_ID    = 'enterprise-admin/get-manage-maintenance';
    public const OPERATION_MATCH = 'GET /manage/v1/maintenance';
    private const METHOD         = 'GET';
    private const PATH           = '/manage/v1/maintenance';
    /**The UUID which identifies a node. **/
    private string $uuid;
    /**The cluster roles from the cluster configuration file. **/
    private string $clusterRoles;

    public function __construct(string $uuid, string $clusterRoles)
    {
        $this->uuid         = $uuid;
        $this->clusterRoles = $clusterRoles;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{uuid}', '{cluster_roles}'], [$this->uuid, $this->clusterRoles], self::PATH . '?uuid={uuid}&cluster_roles={cluster_roles}'));
    }

    /** @return array{code: int} */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Bad request
             **/
            case 400:
                return ['code' => 400];
            /**
             * Unauthorized
             **/

            case 401:
                return ['code' => 401];
            /**
             * Internal error
             **/

            case 500:
                return ['code' => 500];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
