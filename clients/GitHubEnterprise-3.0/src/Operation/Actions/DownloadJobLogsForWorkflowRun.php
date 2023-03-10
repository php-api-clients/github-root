<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class DownloadJobLogsForWorkflowRun
{
    public const OPERATION_ID = 'actions/download-job-logs-for-workflow-run';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/jobs/{job_id}/logs';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/actions/jobs/{job_id}/logs';
    private string $owner;
    private string $repo;
    /**job_id parameter**/
    private int $job_id;
    public function __construct(string $owner, string $repo, int $job_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->job_id = $job_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{job_id}'), array($this->owner, $this->repo, $this->job_id), self::PATH));
    }
    /**
     * @return array{code: int,location: string}
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : array
    {
        switch ($response->getStatusCode()) {
            /**Response**/
            case 302:
                return array('code' => 302, 'location' => $response->getHeaderLine('Location'));
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
