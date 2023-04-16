<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\SecretScanning;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema;
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
    private const METHOD         = 'POST';
    private const PATH           = '/enterprises/{enterprise}/{security_product}/{enablement}';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private string $enterprise;
    /**The security feature to enable or disable.**/
    private string $securityProduct;
    /**The action to take.

    `enable_all` means to enable the specified security feature for all repositories in the enterprise.
    `disable_all` means to disable the specified security feature for all repositories in the enterprise.**/
    private string $enablement;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Enterprises\CbEnterpriseRcb\CbSecurityProductRcb\CbEnablementRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Enterprises\CbEnterpriseRcb\CbSecurityProductRcb\CbEnablementRcb $hydrator, string $enterprise, string $securityProduct, string $enablement)
    {
        $this->enterprise              = $enterprise;
        $this->securityProduct         = $securityProduct;
        $this->enablement              = $enablement;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{enterprise}', '{security_product}', '{enablement}'], [$this->enterprise, $this->securityProduct, $this->enablement], self::PATH));
    }

    public function createResponse(ResponseInterface $response): mixed
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
