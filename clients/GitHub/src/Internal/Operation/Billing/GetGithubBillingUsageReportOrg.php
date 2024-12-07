<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Billing;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Organizations\Org\Settings\Billing\Usage;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\BillingUsageReport;
use ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable;
use ApiClients\Client\GitHub\Schema\ScimError;
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

final class GetGithubBillingUsageReportOrg
{
    public const OPERATION_ID    = 'billing/get-github-billing-usage-report-org';
    public const OPERATION_MATCH = 'GET /organizations/{org}/settings/billing/usage';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**If specified, only return results for a single year. The value of `year` is an integer with four digits representing a year. For example, `2024`. Default value is the current year. **/
    private int $year;
    /**If specified, only return results for a single month. The value of `month` is an integer between `1` and `12`. **/
    private int $month;
    /**If specified, only return results for a single day. The value of `day` is an integer between `1` and `31`. **/
    private int $day;
    /**If specified, only return results for a single hour. The value of `hour` is an integer between `0` and `23`. **/
    private int $hour;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Usage $hydrator, string $org, int $year, int $month, int $day, int $hour)
    {
        $this->org                     = $org;
        $this->year                    = $year;
        $this->month                   = $month;
        $this->day                     = $day;
        $this->hour                    = $hour;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/organizations/{org}/settings/billing/usage{?day,hour,month,year}'))->expand(['day' => $this->day, 'hour' => $this->hour, 'month' => $this->month, 'org' => $this->org, 'year' => $this->year]));
    }

    public function createResponse(ResponseInterface $response): BillingUsageReport
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Billing usage report response for an organization
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BillingUsageReport::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(BillingUsageReport::class, $body);
                    /**
                     * Bad Request
                     **/

                    case 400:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(400, $this->hydrator->hydrateObject(BasicError::class, $body));
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(403, $this->hydrator->hydrateObject(BasicError::class, $body));
                    /**
                     * Internal Error
                     **/

                    case 500:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(500, $this->hydrator->hydrateObject(BasicError::class, $body));
                    /**
                     * Service unavailable
                     **/

                    case 503:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ServiceUnavailable::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable(503, $this->hydrator->hydrateObject(ServiceUnavailable::class, $body));
                }

                break;
            case 'application/scim+json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Bad Request
                     **/
                    case 400:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ScimError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\ScimError(400, $this->hydrator->hydrateObject(ScimError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
