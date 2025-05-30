<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\SecretScanning;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
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

final class UpdateAlert
{
    public const OPERATION_ID    = 'secret-scanning/update-alert';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The number that identifies an alert. You can find this at the end of the URL for a code scanning alert within GitHub, and in the `number` field in the response from the `GET /repos/{owner}/{repo}/code-scanning/alerts` operation. **/
    private int $alertNumber;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber $hydrator, string $owner, string $repo, int $alertNumber)
    {
        $this->owner       = $owner;
        $this->repo        = $repo;
        $this->alertNumber = $alertNumber;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\SecretScanning\UpdateAlert\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('PATCH', str_replace(['{owner}', '{repo}', '{alert_number}'], [$this->owner, $this->repo, $this->alertNumber], '/repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}'), ['Content-Type' => 'application/json'], json_encode($data));
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable(503, $this->hydrator->hydrateObject(Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Bad request, resolution comment is invalid or the resolution was not changed.
             **/
            case 400:
                return new WithoutBody(400, []);
            /**
             * Repository is public, or secret scanning is disabled for the repository, or the resource is not found
             **/

            case 404:
                return new WithoutBody(404, []);
            /**
             * State does not match the resolution or resolution comment
             **/

            case 422:
                return new WithoutBody(422, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
