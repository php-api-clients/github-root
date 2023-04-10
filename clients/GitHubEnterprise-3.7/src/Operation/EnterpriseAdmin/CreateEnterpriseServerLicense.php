<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\EnterpriseAdmin;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class CreateEnterpriseServerLicense
{
    public const OPERATION_ID = 'enterprise-admin/create-enterprise-server-license';
    public const OPERATION_MATCH = 'POST /setup/api/start';
    private const METHOD = 'POST';
    private const PATH = '/setup/api/start';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\EnterpriseAdmin\CreateEnterpriseServerLicense\Request\MultipartformData::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array(), array(), self::PATH), array('Content-Type' => 'multipart/form-data'), json_encode($data));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
