<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Actions;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\SelectedActions;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

use function explode;
use function json_decode;

final class GetAllowedActionsOrganization
{
    public const OPERATION_ID    = 'actions/get-allowed-actions-organization';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/permissions/selected-actions';
    /**The organization name. The name is not case sensitive. **/
    private string $org;

    public function __construct(private SchemaValidator $responseSchemaValidator, private SelectedActions $hydrator, string $org)
    {
        $this->org                     = $org;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/orgs/{org}/actions/permissions/selected-actions'))->expand(['org' => $this->org]));
    }

    public function createResponse(ResponseInterface $response): \ApiClients\Client\GitHub\Schema\SelectedActions
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(\ApiClients\Client\GitHub\Schema\SelectedActions::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(\ApiClients\Client\GitHub\Schema\SelectedActions::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
