<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Orgs;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class EnableOrDisableSecurityProductOnAllOrgRepos
{
    public const OPERATION_ID    = 'orgs/enable-or-disable-security-product-on-all-org-repos';
    public const OPERATION_MATCH = 'POST /orgs/{org}/{security_product}/{enablement}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The security feature to enable or disable. **/
    private string $securityProduct;
    /**The action to take.

    `enable_all` means to enable the specified security feature for all repositories in the organization.
    `disable_all` means to disable the specified security feature for all repositories in the organization. **/
    private string $enablement;

    public function __construct(string $org, string $securityProduct, string $enablement)
    {
        $this->org             = $org;
        $this->securityProduct = $securityProduct;
        $this->enablement      = $enablement;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('POST', str_replace(['{org}', '{security_product}', '{enablement}'], [$this->org, $this->securityProduct, $this->enablement], '/orgs/{org}/{security_product}/{enablement}'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Action started
             **/
            case 204:
                return new WithoutBody(204, []);
            /**
             * The action could not be taken due to an in progress enablement, or a policy is preventing enablement
             **/

            case 422:
                return new WithoutBody(422, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
