<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Actions;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Runs;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json;
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

final class ListWorkflowRuns
{
    public const OPERATION_ID    = 'actions/list-workflow-runs';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}/runs';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The ID of the workflow. You can also pass the workflow file name as a string. **/
    private int|string $workflowId;
    /**Returns someone's workflow runs. Use the login for the user who created the `push` associated with the check suite or workflow run. **/
    private string $actor;
    /**Returns workflow runs associated with a branch. Use the name of the branch of the `push`. **/
    private string $branch;
    /**Returns workflow run triggered by the event you specify. For example, `push`, `pull_request` or `issue`. For more information, see "[Events that trigger workflows](https://docs.github.com/actions/automating-your-workflow-with-github-actions/events-that-trigger-workflows)." **/
    private string $event;
    /**Returns workflow runs with the check run `status` or `conclusion` that you specify. For example, a conclusion can be `success` or a status can be `in_progress`. Only GitHub Actions can set a status of `waiting`, `pending`, or `requested`. **/
    private string $status;
    /**Returns workflow runs created within the given date-time range. For more information on the syntax, see "[Understanding the search syntax](https://docs.github.com/search-github/getting-started-with-searching-on-github/understanding-the-search-syntax#query-for-dates)." **/
    private string $created;
    /**Returns workflow runs with the `check_suite_id` that you specify. **/
    private int $checkSuiteId;
    /**Only returns workflow runs that are associated with the specified `head_sha`. **/
    private string $headSha;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;
    /**If `true` pull requests are omitted from the response (empty array). **/
    private bool $excludePullRequests;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Runs $hydrator, string $owner, string $repo, int|string $workflowId, string $actor, string $branch, string $event, string $status, string $created, int $checkSuiteId, string $headSha, int $perPage = 30, int $page = 1, bool $excludePullRequests = false)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->workflowId              = $workflowId;
        $this->actor                   = $actor;
        $this->branch                  = $branch;
        $this->event                   = $event;
        $this->status                  = $status;
        $this->created                 = $created;
        $this->checkSuiteId            = $checkSuiteId;
        $this->headSha                 = $headSha;
        $this->perPage                 = $perPage;
        $this->page                    = $page;
        $this->excludePullRequests     = $excludePullRequests;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/repos/{owner}/{repo}/actions/workflows/{workflow_id}/runs{?actor,branch,check_suite_id,created,event,exclude_pull_requests,head_sha,page,per_page,status}'))->expand(['actor' => $this->actor, 'branch' => $this->branch, 'check_suite_id' => $this->checkSuiteId, 'created' => $this->created, 'event' => $this->event, 'exclude_pull_requests' => $this->excludePullRequests, 'head_sha' => $this->headSha, 'owner' => $this->owner, 'page' => $this->page, 'per_page' => $this->perPage, 'repo' => $this->repo, 'status' => $this->status, 'workflow_id' => $this->workflowId]));
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
