<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_encode;
use function str_replace;

final class SetAllowedActionsEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/set-allowed-actions-enterprise';
    public const OPERATION_MATCH = 'PUT /enterprises/{enterprise}/actions/permissions/selected-actions';
    private const METHOD         = 'PUT';
    private const PATH           = '/enterprises/{enterprise}/actions/permissions/selected-actions';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, string $enterprise)
    {
        $this->enterprise = $enterprise;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\SelectedActions::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{enterprise}'], [$this->enterprise], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    /** @return array{code: int} */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
