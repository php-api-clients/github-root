<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;

use function explode;
use function json_decode;
use function str_replace;

final class ListPreReceiveEnvironments
{
    public const OPERATION_ID    = 'enterprise-admin/list-pre-receive-environments';
    public const OPERATION_MATCH = 'GET /admin/pre-receive-environments';
    private const METHOD         = 'GET';
    private const PATH           = '/admin/pre-receive-environments';
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    /**The direction to sort the results by.**/
    private string $direction;
    private string $sort;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Admin\PreReceiveEnvironments $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Admin\PreReceiveEnvironments $hydrator, int $perPage = 30, int $page = 1, string $direction = 'desc', string $sort = 'created')
    {
        $this->perPage                 = $perPage;
        $this->page                    = $page;
        $this->direction               = $direction;
        $this->sort                    = $sort;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{per_page}', '{page}', '{direction}', '{sort}'], [$this->perPage, $this->page, $this->direction, $this->sort], self::PATH . '?per_page={per_page}&page={page}&direction={direction}&sort={sort}'));
    }

    /**
     * @return Observable<Schema\PreReceiveEnvironment>
     */
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
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, Reader::readFromJson(Schema\PreReceiveEnvironment::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\PreReceiveEnvironment {
                            return $this->hydrator->hydrateObject(Schema\PreReceiveEnvironment::class, $body);
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
