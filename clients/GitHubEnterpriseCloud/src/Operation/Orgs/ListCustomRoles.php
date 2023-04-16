<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\Orgs;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class ListCustomRoles
{
    public const OPERATION_ID    = 'orgs/list-custom-roles';
    public const OPERATION_MATCH = 'GET /organizations/{organization_id}/custom_roles';
    private const METHOD         = 'GET';
    private const PATH           = '/organizations/{organization_id}/custom_roles';
    /**The unique identifier of the organization.**/
    private string $organizationId;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Organizations\CbOrganizationIdRcb\CustomRoles $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Organizations\CbOrganizationIdRcb\CustomRoles $hydrator, string $organizationId)
    {
        $this->organizationId          = $organizationId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{organization_id}'], [$this->organizationId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\Operation\Orgs\ListCustomRoles\Response\Applicationjson\H200
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response - list of custom role names
                    **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operation\Orgs\ListCustomRoles\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\Operation\Orgs\ListCustomRoles\Response\Applicationjson\H200::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
