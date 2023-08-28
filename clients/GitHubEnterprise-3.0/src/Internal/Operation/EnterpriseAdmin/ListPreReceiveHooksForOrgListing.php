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

final class ListPreReceiveHooksForOrgListing
{
    public const OPERATION_ID    = 'enterprise-admin/list-pre-receive-hooks-for-org';
    public const OPERATION_MATCH = 'LIST /orgs/{org}/pre-receive-hooks';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/pre-receive-hooks';
    /**Results per page (max 100) **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;
    /**One of `asc` (ascending) or `desc` (descending). **/
    private string $direction;
    /**The sort order for the response collection. **/
    private string $sort;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\PreReceiveHooks $hydrator, private string $org, int $perPage = 30, int $page = 1, string $direction = 'desc', string $sort = 'created')
    {
        $this->perPage   = $perPage;
        $this->page      = $page;
        $this->direction = $direction;
        $this->sort      = $sort;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{per_page}', '{page}', '{direction}', '{sort}'], [$this->org, $this->perPage, $this->page, $this->direction, $this->sort], self::PATH . '?per_page={per_page}&page={page}&direction={direction}&sort={sort}'));
    }

    /** @return Observable<Schema\OrgPreReceiveHook> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\OrgPreReceiveHook {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\OrgPreReceiveHook::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrators->hydrateObject(Schema\OrgPreReceiveHook::class, $body);
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
