<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class GetConsumedLicenses
{
    public const OPERATION_ID    = 'enterprise-admin/get-consumed-licenses';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/consumed-licenses';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-cloud@latest//rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-cloud@latest//rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Enterprises\Enterprise\ConsumedLicenses $hydrator, string $enterprise, int $perPage = 30, int $page = 1)
    {
        $this->enterprise = $enterprise;
        $this->perPage    = $perPage;
        $this->page       = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{enterprise}', '{per_page}', '{page}'], [$this->enterprise, $this->perPage, $this->page], '/enterprises/{enterprise}/consumed-licenses' . '?per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): string
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    case 200:
                        return $body;
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
