<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Orgs;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
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
    /**The unique identifier of the organization. **/
    private string $organizationId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Organizations\OrganizationId\CustomRoles $hydrator, string $organizationId)
    {
        $this->organizationId = $organizationId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{organization_id}'], [$this->organizationId], '/organizations/{organization_id}/custom_roles'));
    }

    public function createResponse(ResponseInterface $response): Schema\Operations\Orgs\ListCustomRoles\Response\ApplicationJson\Ok
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Orgs\ListCustomRoles\Response\ApplicationJson\Ok::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\Orgs\ListCustomRoles\Response\ApplicationJson\Ok::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
