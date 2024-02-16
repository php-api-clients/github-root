<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
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

final class GetAuditLog
{
    public const OPERATION_ID    = 'enterprise-admin/get-audit-log';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/audit-log';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;
    /**A search phrase. For more information, see [Searching the audit log](https://docs.github.com/enterprise-server@3.12/admin/monitoring-activity-in-your-enterprise/reviewing-audit-logs-for-your-enterprise/searching-the-audit-log-for-your-enterprise#searching-the-audit-log). **/
    private string $phrase;
    /**The event types to include:

    - `web` - returns web (non-Git) events.
    - `git` - returns Git events.
    - `all` - returns both web and Git events.

    The default is `web`. **/
    private string $include;
    /**A cursor, as given in the [Link header](https://docs.github.com/enterprise-server@3.12/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for events after this cursor. **/
    private string $after;
    /**A cursor, as given in the [Link header](https://docs.github.com/enterprise-server@3.12/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for events before this cursor. **/
    private string $before;
    /**The order of audit log events. To list newest events first, specify `desc`. To list oldest events first, specify `asc`.

    The default is `desc`. **/
    private string $order;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.12/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.12/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Enterprises\Enterprise\AuditLog $hydrator, string $enterprise, string $phrase, string $include, string $after, string $before, string $order, int $page = 1, int $perPage = 30)
    {
        $this->enterprise = $enterprise;
        $this->phrase     = $phrase;
        $this->include    = $include;
        $this->after      = $after;
        $this->before     = $before;
        $this->order      = $order;
        $this->page       = $page;
        $this->perPage    = $perPage;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{enterprise}', '{phrase}', '{include}', '{after}', '{before}', '{order}', '{page}', '{per_page}'], [$this->enterprise, $this->phrase, $this->include, $this->after, $this->before, $this->order, $this->page, $this->perPage], '/enterprises/{enterprise}/audit-log' . '?phrase={phrase}&include={include}&after={after}&before={before}&order={order}&page={page}&per_page={per_page}'));
    }

    /** @return Observable<Schema\AuditLogEvent> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\AuditLogEvent {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\AuditLogEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\AuditLogEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
