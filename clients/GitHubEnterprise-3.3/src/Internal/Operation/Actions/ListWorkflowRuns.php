<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Actions;

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

final class ListWorkflowRuns
{
    public const OPERATION_ID    = 'actions/list-workflow-runs';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}/runs';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    /**The ID of the workflow. You can also pass the workflow file name as a string. **/
    private $workflowId;
    /**Returns someone's workflow runs. Use the login for the user who created the `push` associated with the check suite or workflow run. **/
    private string $actor;
    /**Returns workflow runs associated with a branch. Use the name of the branch of the `push`. **/
    private string $branch;
    /**Returns workflow run triggered by the event you specify. For example, `push`, `pull_request` or `issue`. For more information, see "[Events that trigger workflows](https://docs.github.com/enterprise-server@3.3/actions/automating-your-workflow-with-github-actions/events-that-trigger-workflows)." **/
    private string $event;
    /**Returns workflow runs with the check run `status` or `conclusion` that you specify. For example, a conclusion can be `success` or a status can be `in_progress`. Only GitHub can set a status of `waiting` or `requested`. **/
    private string $status;
    /**Returns workflow runs created within the given date-time range. For more information on the syntax, see "[Understanding the search syntax](https://docs.github.com/enterprise-server@3.3/search-github/getting-started-with-searching-on-github/understanding-the-search-syntax#query-for-dates)." **/
    private string $created;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;
    /**If `true` pull requests are omitted from the response (empty array). **/
    private bool $excludePullRequests;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Runs $hydrator, string $owner, string $repo, $workflowId, string $actor, string $branch, string $event, string $status, string $created, int $perPage = 30, int $page = 1, bool $excludePullRequests = false)
    {
        $this->owner               = $owner;
        $this->repo                = $repo;
        $this->workflowId          = $workflowId;
        $this->actor               = $actor;
        $this->branch              = $branch;
        $this->event               = $event;
        $this->status              = $status;
        $this->created             = $created;
        $this->perPage             = $perPage;
        $this->page                = $page;
        $this->excludePullRequests = $excludePullRequests;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{workflow_id}', '{actor}', '{branch}', '{event}', '{status}', '{created}', '{per_page}', '{page}', '{exclude_pull_requests}'], [$this->owner, $this->repo, $this->workflowId, $this->actor, $this->branch, $this->event, $this->status, $this->created, $this->perPage, $this->page, $this->excludePullRequests], '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/runs' . '?actor={actor}&branch={branch}&event={event}&status={status}&created={created}&per_page={per_page}&page={page}&exclude_pull_requests={exclude_pull_requests}'));
    }

    public function createResponse(ResponseInterface $response): Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
