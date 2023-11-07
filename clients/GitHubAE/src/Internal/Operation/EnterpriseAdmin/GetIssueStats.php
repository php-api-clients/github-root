<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class GetIssueStats
{
    public const OPERATION_ID    = 'enterprise-admin/get-issue-stats';
    public const OPERATION_MATCH = 'GET /enterprise/stats/issues';

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Enterprise\Stats\Issues $hydrator)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace([], [], '/enterprise/stats/issues'));
    }

    public function createResponse(ResponseInterface $response): Schema\EnterpriseIssueOverview
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\EnterpriseIssueOverview::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\EnterpriseIssueOverview::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
