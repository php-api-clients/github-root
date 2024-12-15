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

use function explode;
use function json_decode;
use function str_replace;

final class ListSelfHostedRunnerGroupsForEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/list-self-hosted-runner-groups-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/actions/runner-groups';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;
    /**Only return runner groups that are allowed to be used by this organization. **/
    private string $visibleToOrganization;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.14/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.14/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups $hydrator, string $enterprise, string $visibleToOrganization, int $perPage = 30, int $page = 1)
    {
        $this->enterprise            = $enterprise;
        $this->visibleToOrganization = $visibleToOrganization;
        $this->perPage               = $perPage;
        $this->page                  = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{enterprise}', '{visible_to_organization}', '{per_page}', '{page}'], [$this->enterprise, $this->visibleToOrganization, $this->perPage, $this->page], '/enterprises/{enterprise}/actions/runner-groups' . '?visible_to_organization={visible_to_organization}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
