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

final class GetAlert
{
    public const OPERATION_ID    = 'secret-scanning/get-alert';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The number that identifies an alert. You can find this at the end of the URL for a code scanning alert within GitHub, and in the `number` field in the response from the `GET /repos/{owner}/{repo}/code-scanning/alerts` operation. **/
    private int $alertNumber;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber $hydrator, string $owner, string $repo, int $alertNumber)
    {
        $this->owner       = $owner;
        $this->repo        = $repo;
        $this->alertNumber = $alertNumber;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{alert_number}'], [$this->owner, $this->repo, $this->alertNumber], '/repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}'));
    }

    public function createResponse(ResponseInterface $response): Schema\SecretScanningAlert|WithoutBody
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\SecretScanningAlert::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\SecretScanningAlert::class, $body);
                    /**
                     * Service unavailable
                     **/

                    case 503:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable(503, $this->hydrator->hydrateObject(Schema\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Not modified
             **/
            case 304:
                return new WithoutBody(304, []);
            /**
             * Repository is public, or secret scanning is disabled for the repository, or the resource is not found
             **/

            case 404:
                return new WithoutBody(404, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
