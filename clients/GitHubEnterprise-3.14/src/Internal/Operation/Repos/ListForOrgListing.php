<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Repos;

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

final class ListForOrgListing
{
    public const OPERATION_ID    = 'repos/list-for-org';
    public const OPERATION_MATCH = 'LIST /orgs/{org}/repos';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**Specifies the types of repositories you want returned. `internal` is not yet supported when a GitHub App calls this endpoint with an installation access token. **/
    private string $type;
    /**The order to sort by. Default: `asc` when using `full_name`, otherwise `desc`. **/
    private string $direction;
    /**The property to sort the results by. **/
    private string $sort;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.14/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.14/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Repos $hydrator, string $org, string $type, string $direction, string $sort = 'created', int $perPage = 30, int $page = 1)
    {
        $this->org       = $org;
        $this->type      = $type;
        $this->direction = $direction;
        $this->sort      = $sort;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{org}', '{type}', '{direction}', '{sort}', '{per_page}', '{page}'], [$this->org, $this->type, $this->direction, $this->sort, $this->perPage, $this->page], '/orgs/{org}/repos' . '?type={type}&direction={direction}&sort={sort}&per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\MinimalRepository> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\MinimalRepository {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\MinimalRepository::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\MinimalRepository::class, $body);
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
