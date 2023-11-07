<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/remove-org-access-to-self-hosted-runner-group-in-enterprise';
    public const OPERATION_MATCH = 'DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations/{org_id}';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;
    /**Unique identifier of the self-hosted runner group. **/
    private int $runnerGroupId;
    /**Unique identifier of an organization. **/
    private int $orgId;

    public function __construct(string $enterprise, int $runnerGroupId, int $orgId)
    {
        $this->enterprise    = $enterprise;
        $this->runnerGroupId = $runnerGroupId;
        $this->orgId         = $orgId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{enterprise}', '{runner_group_id}', '{org_id}'], [$this->enterprise, $this->runnerGroupId, $this->orgId], '/enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations/{org_id}'));
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
