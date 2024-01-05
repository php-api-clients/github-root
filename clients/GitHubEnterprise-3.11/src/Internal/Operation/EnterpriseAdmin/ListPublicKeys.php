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

final class ListPublicKeys
{
    public const OPERATION_ID    = 'enterprise-admin/list-public-keys';
    public const OPERATION_MATCH = 'GET /admin/keys';
    /**Only show public keys accessed after the given time. **/
    private string $since;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.11/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.11/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;
    /**The direction to sort the results by. **/
    private string $direction;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Admin\Keys $hydrator, string $since, int $perPage = 30, int $page = 1, string $direction = 'desc', private string $sort = 'created')
    {
        $this->since     = $since;
        $this->perPage   = $perPage;
        $this->page      = $page;
        $this->direction = $direction;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{since}', '{per_page}', '{page}', '{direction}', '{sort}'], [$this->since, $this->perPage, $this->page, $this->direction, $this->sort], '/admin/keys' . '?since={since}&per_page={per_page}&page={page}&direction={direction}&sort={sort}'));
    }

    /** @return Observable<Schema\PublicKeyFull> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\PublicKeyFull {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\PublicKeyFull::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\PublicKeyFull::class, $body);
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
