<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\SecretScanning;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Enterprises\Enterprise\SecretScanning\Alerts;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable;
use ApiClients\Client\GitHub\Schema\OrganizationSecretScanningAlert;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;

final class ListAlertsForEnterprise
{
    public const OPERATION_ID    = 'secret-scanning/list-alerts-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/secret-scanning/alerts';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;
    /**Set to `open` or `resolved` to only list secret scanning alerts in a specific state. **/
    private string $state;
    /**A comma-separated list of secret types to return. By default all secret types are returned.
    See "[Supported secret scanning patterns](https://docs.github.com/code-security/secret-scanning/introduction/supported-secret-scanning-patterns#supported-secrets)"
    for a complete list of secret types. **/
    private string $secretType;
    /**A comma-separated list of resolutions. Only secret scanning alerts with one of these resolutions are listed. Valid resolutions are `false_positive`, `wont_fix`, `revoked`, `pattern_edited`, `pattern_deleted` or `used_in_tests`. **/
    private string $resolution;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results before this cursor. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results after this cursor. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private string $after;
    /**A comma-separated list of validities that, when present, will return alerts that match the validities in this list. Valid options are `active`, `inactive`, and `unknown`. **/
    private string $validity;
    /**The property to sort the results by. `created` means when the alert was created. `updated` means when the alert was updated or resolved. **/
    private string $sort;
    /**The direction to sort the results by. **/
    private string $direction;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**A boolean value representing whether or not to filter alerts by the publicly-leaked tag being present. **/
    private bool $isPubliclyLeaked;
    /**A boolean value representing whether or not to filter alerts by the multi-repo tag being present. **/
    private bool $isMultiRepo;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Alerts $hydrator, string $enterprise, string $state, string $secretType, string $resolution, string $before, string $after, string $validity, string $sort = 'created', string $direction = 'desc', int $perPage = 30, bool $isPubliclyLeaked = false, bool $isMultiRepo = false)
    {
        $this->enterprise              = $enterprise;
        $this->state                   = $state;
        $this->secretType              = $secretType;
        $this->resolution              = $resolution;
        $this->before                  = $before;
        $this->after                   = $after;
        $this->validity                = $validity;
        $this->sort                    = $sort;
        $this->direction               = $direction;
        $this->perPage                 = $perPage;
        $this->isPubliclyLeaked        = $isPubliclyLeaked;
        $this->isMultiRepo             = $isMultiRepo;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/enterprises/{enterprise}/secret-scanning/alerts{?after,before,direction,is_multi_repo,is_publicly_leaked,per_page,resolution,secret_type,sort,state,validity}'))->expand(['after' => $this->after, 'before' => $this->before, 'direction' => $this->direction, 'enterprise' => $this->enterprise, 'is_multi_repo' => $this->isMultiRepo, 'is_publicly_leaked' => $this->isPubliclyLeaked, 'per_page' => $this->perPage, 'resolution' => $this->resolution, 'secret_type' => $this->secretType, 'sort' => $this->sort, 'state' => $this->state, 'validity' => $this->validity]));
    }

    /** @return Observable<OrganizationSecretScanningAlert> */
    public function createResponse(ResponseInterface $response): Observable
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): OrganizationSecretScanningAlert {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(OrganizationSecretScanningAlert::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(OrganizationSecretScanningAlert::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(404, $this->hydrator->hydrateObject(BasicError::class, $body));
                    /**
                     * Service unavailable
                     **/

                    case 503:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ServiceUnavailable::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable(503, $this->hydrator->hydrateObject(ServiceUnavailable::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
