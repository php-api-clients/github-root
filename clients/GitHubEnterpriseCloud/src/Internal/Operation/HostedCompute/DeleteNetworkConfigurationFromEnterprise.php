<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\HostedCompute;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteNetworkConfigurationFromEnterprise
{
    public const OPERATION_ID    = 'hosted-compute/delete-network-configuration-from-enterprise';
    public const OPERATION_MATCH = 'DELETE /enterprises/{enterprise}/network-configurations/{network_configuration_id}';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;
    /**Unique identifier of the hosted compute network configuration. **/
    private string $networkConfigurationId;

    public function __construct(string $enterprise, string $networkConfigurationId)
    {
        $this->enterprise             = $enterprise;
        $this->networkConfigurationId = $networkConfigurationId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{enterprise}', '{network_configuration_id}'], [$this->enterprise, $this->networkConfigurationId], '/enterprises/{enterprise}/network-configurations/{network_configuration_id}'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
