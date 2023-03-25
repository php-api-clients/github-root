<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class DownloadJobLogsForWorkflowRunStreaming
{
    public const OPERATION_ID = 'actions/download-job-logs-for-workflow-run';
    public const OPERATION_MATCH = 'STREAM /repos/{owner}/{repo}/actions/jobs/{job_id}/logs';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/actions/jobs/{job_id}/logs';
    private string $owner;
    private string $repo;
    /**job_id parameter**/
    private int $jobId;
    private readonly \React\Http\Browser $browser;
    public function __construct(\React\Http\Browser $browser, string $owner, string $repo, int $jobId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->jobId = $jobId;
        $this->browser = $browser;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{job_id}'), array($this->owner, $this->repo, $this->jobId), self::PATH));
    }
    /**
     * @return \Rx\Observable<string>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        switch ($response->getStatusCode()) {
            /**Response**/
            case 302:
                $stream = new \Rx\Subject\Subject();
                $this->browser->requestStreaming('GET', $response->getHeaderLine('location'))->then(static function (\Psr\Http\Message\ResponseInterface $response) use($stream) : void {
                    $body = $response->getBody();
                    if (!($body instanceof \Psr\Http\Message\StreamInterface && $body instanceof \React\Stream\ReadableStreamInterface)) {
                        $stream->onError(new \RuntimeException());
                        return;
                    }
                    $body->on('data', static function (string $data) use($stream) : void {
                        $stream->onNext($data);
                    });
                    $body->on('close', static function () use($stream) : void {
                        $stream->onCompleted();
                    });
                    $body->on('error', static function (\Throwable $error) use($stream) : void {
                        $stream->onError($error);
                    });
                });
                return $stream;
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
