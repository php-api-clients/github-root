<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Billing;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
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
use function json_encode;
use function str_replace;

final class AddResourceToCostCenter
{
    public const OPERATION_ID    = 'billing/add-resource-to-cost-center';
    public const OPERATION_MATCH = 'POST /enterprises/{enterprise}/settings/billing/cost-centers/{cost_center_id}/resource';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;
    /**The ID corresponding to the cost center. **/
    private string $costCenterId;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Enterprises\Enterprise\Settings\Billing\CostCenters\CostCenterId\Resource $hydrator, string $enterprise, string $costCenterId)
    {
        $this->enterprise   = $enterprise;
        $this->costCenterId = $costCenterId;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Billing\AddResourceToCostCenter\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('POST', str_replace(['{enterprise}', '{cost_center_id}'], [$this->enterprise, $this->costCenterId], '/enterprises/{enterprise}/settings/billing/cost-centers/{cost_center_id}/resource'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\Operations\Billing\AddResourceToCostCenter\Response\ApplicationJson\Ok
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response when adding resources to a cost center
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Billing\AddResourceToCostCenter\Response\ApplicationJson\Ok::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\Billing\AddResourceToCostCenter\Response\ApplicationJson\Ok::class, $body);
                    /**
                     * Bad Request
                     **/

                    case 400:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(400, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Internal Error
                     **/

                    case 500:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(500, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Service unavailable
                     **/

                    case 503:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable(503, $this->hydrator->hydrateObject(Schema\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::class, $body));
                }

                break;
            case 'application/scim+json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Bad Request
                     **/
                    case 400:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ScimError(400, $this->hydrator->hydrateObject(Schema\ScimError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
