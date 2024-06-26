<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use React\Http\Browser;
use React\Stream\ReadableStreamInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Subject\Subject;
use Throwable;

use function str_replace;

final class DownloadArtifactStreaming
{
    public const OPERATION_ID    = 'actions/download-artifact';
    public const OPERATION_MATCH = 'STREAM /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}';
    /**artifact_id parameter **/
    private int $artifactId;

    public function __construct(private readonly Browser $browser, private string $owner, private string $repo, int $artifactId, private string $archiveFormat)
    {
        $this->artifactId = $artifactId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{artifact_id}', '{archive_format}'], [$this->owner, $this->repo, $this->artifactId, $this->archiveFormat], '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}'));
    }

    /** @return Observable<string> */
    public function createResponse(ResponseInterface $response): Observable
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 302:
                $stream = new Subject();
                $this->browser->requestStreaming('GET', $response->getHeaderLine('location'))->then(static function (ResponseInterface $response) use ($stream): void {
                    $body = $response->getBody();
                    if (! ($body instanceof StreamInterface && $body instanceof ReadableStreamInterface)) {
                        $stream->onError(new RuntimeException());

                        return;
                    }

                    $body->on('data', static function (string $data) use ($stream): void {
                        $stream->onNext($data);
                    });
                    $body->on('close', static function () use ($stream): void {
                        $stream->onCompleted();
                    });
                    $body->on('error', static function (Throwable $error) use ($stream): void {
                        $stream->onError($error);
                    });
                });

                return $stream;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
