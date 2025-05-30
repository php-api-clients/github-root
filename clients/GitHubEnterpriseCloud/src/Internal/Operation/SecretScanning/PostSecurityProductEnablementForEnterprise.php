<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\SecretScanning;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class PostSecurityProductEnablementForEnterprise
{
    public const OPERATION_ID    = 'secret-scanning/post-security-product-enablement-for-enterprise';
    public const OPERATION_MATCH = 'POST /enterprises/{enterprise}/{security_product}/{enablement}';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;
    /**The security feature to enable or disable. **/
    private string $securityProduct;
    /**The action to take.

    `enable_all` means to enable the specified security feature for all repositories in the enterprise.
    `disable_all` means to disable the specified security feature for all repositories in the enterprise. **/
    private string $enablement;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Enterprises\Enterprise\SecurityProduct\Enablement $hydrator, string $enterprise, string $securityProduct, string $enablement)
    {
        $this->enterprise      = $enterprise;
        $this->securityProduct = $securityProduct;
        $this->enablement      = $enablement;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('POST', str_replace(['{enterprise}', '{security_product}', '{enablement}'], [$this->enterprise, $this->securityProduct, $this->enablement], '/enterprises/{enterprise}/{security_product}/{enablement}'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Resource not found
                     **/
                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

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
