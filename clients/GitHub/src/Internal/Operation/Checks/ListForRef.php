<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Checks;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckRuns;
use ApiClients\Client\GitHub\Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json;
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

final class ListForRef
{
    public const OPERATION_ID    = 'checks/list-for-ref';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/commits/{ref}/check-runs';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The commit reference. Can be a commit SHA, branch name (`heads/BRANCH_NAME`), or tag name (`tags/TAG_NAME`). For more information, see "[Git References](https://git-scm.com/book/en/v2/Git-Internals-Git-References)" in the Git documentation. **/
    private string $ref;
    /**Returns check runs with the specified `name`. **/
    private string $checkName;
    /**Returns check runs with the specified `status`. **/
    private string $status;
    /**Filters check runs by their `completed_at` timestamp. `latest` returns the most recent check runs. **/
    private string $filter;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;

    public function __construct(private SchemaValidator $responseSchemaValidator, private CheckRuns $hydrator, string $owner, string $repo, string $ref, string $checkName, string $status, private int $appId, string $filter = 'latest', int $perPage = 30, int $page = 1)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->ref                     = $ref;
        $this->checkName               = $checkName;
        $this->status                  = $status;
        $this->filter                  = $filter;
        $this->perPage                 = $perPage;
        $this->page                    = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/repos/{owner}/{repo}/commits/{ref}/check-runs{?app_id,check_name,filter,page,per_page,status}'))->expand(['app_id' => $this->appId, 'check_name' => $this->checkName, 'filter' => $this->filter, 'owner' => $this->owner, 'page' => $this->page, 'per_page' => $this->perPage, 'ref' => $this->ref, 'repo' => $this->repo, 'status' => $this->status]));
    }

    public function createResponse(ResponseInterface $response): Json
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Json::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(Json::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
