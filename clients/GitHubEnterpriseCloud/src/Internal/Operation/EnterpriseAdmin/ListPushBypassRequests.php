<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;
use function str_replace;

final class ListPushBypassRequests
{
    public const OPERATION_ID    = 'enterprise-admin/list-push-bypass-requests';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/bypass-requests/push-rules';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;
    /**The name of the organization to filter on. **/
    private string $organizationName;
    /**Filter bypass requests by the handle of the GitHub user who reviewed the bypass request. **/
    private string $reviewer;
    /**Filter bypass requests by the handle of the GitHub user who requested the bypass. **/
    private string $requester;
    /**The time period to filter by.

    For example, `day` will filter for rule suites that occurred in the past 24 hours, and `week` will filter for insights that occurred in the past 7 days (168 hours). **/
    private string $timePeriod;
    /**The status of the bypass request to filter on. When specified, only requests with this status will be returned. **/
    private string $requestStatus;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-cloud@latest//rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-cloud@latest//rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Enterprises\Enterprise\BypassRequests\PushRules $hydrator, string $enterprise, string $organizationName, string $reviewer, string $requester, string $timePeriod = 'day', string $requestStatus = 'all', int $perPage = 30, int $page = 1)
    {
        $this->enterprise       = $enterprise;
        $this->organizationName = $organizationName;
        $this->reviewer         = $reviewer;
        $this->requester        = $requester;
        $this->timePeriod       = $timePeriod;
        $this->requestStatus    = $requestStatus;
        $this->perPage          = $perPage;
        $this->page             = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{enterprise}', '{organization_name}', '{reviewer}', '{requester}', '{time_period}', '{request_status}', '{per_page}', '{page}'], [$this->enterprise, $this->organizationName, $this->reviewer, $this->requester, $this->timePeriod, $this->requestStatus, $this->perPage, $this->page], '/enterprises/{enterprise}/bypass-requests/push-rules' . '?organization_name={organization_name}&reviewer={reviewer}&requester={requester}&time_period={time_period}&request_status={request_status}&per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\PushRuleBypassRequest> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\PushRuleBypassRequest {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\PushRuleBypassRequest::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\PushRuleBypassRequest::class, $body);
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Internal Error
                     **/

                    case 500:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(500, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
