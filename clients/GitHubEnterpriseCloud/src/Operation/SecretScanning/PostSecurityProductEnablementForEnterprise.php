<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\SecretScanning;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final class PostSecurityProductEnablementForEnterprise
{
    public const OPERATION_ID = 'secret-scanning/post-security-product-enablement-for-enterprise';
    public const OPERATION_MATCH = 'POST /enterprises/{enterprise}/{security_product}/{enablement}';
    private const METHOD = 'POST';
    private const PATH = '/enterprises/{enterprise}/{security_product}/{enablement}';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private string $enterprise;
    /**The security feature to enable or disable.**/
    private string $security_product;
    /**The action to take.
    
    `enable_all` means to enable the specified security feature for all repositories in the enterprise.
    `disable_all` means to disable the specified security feature for all repositories in the enterprise.**/
    private string $enablement;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Enterprises\CbEnterpriseRcb\CbSecurityProductRcb\CbEnablementRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Enterprises\CbEnterpriseRcb\CbSecurityProductRcb\CbEnablementRcb $hydrator, string $enterprise, string $security_product, string $enablement)
    {
        $this->enterprise = $enterprise;
        $this->security_product = $security_product;
        $this->enablement = $enablement;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{enterprise}', '{security_product}', '{enablement}'), array($this->enterprise, $this->security_product, $this->enablement), self::PATH));
    }
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : void
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\BasicError::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
