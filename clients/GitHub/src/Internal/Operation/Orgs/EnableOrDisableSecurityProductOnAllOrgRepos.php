<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Orgs;

use ApiClients\Client\GitHub\Schema\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos\Request\ApplicationJson;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

use function json_encode;

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

    public function __construct(private SchemaValidator $requestSchemaValidator, string $org, string $securityProduct, string $enablement)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->org                    = $org;
        $this->securityProduct        = $securityProduct;
        $this->enablement             = $enablement;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(ApplicationJson::SCHEMA_JSON, Schema::class));

        return new Request('POST', (string) (new UriTemplate('/orgs/{org}/{security_product}/{enablement}'))->expand(['enablement' => $this->enablement, 'org' => $this->org, 'security_product' => $this->securityProduct]), ['Content-Type' => 'application/json'], json_encode($data));
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
