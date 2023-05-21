<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Actions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DownloadArtifact
{
    public const OPERATION_ID    = 'actions/download-artifact';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $owner, string $repo, int $artifactId, string $archiveFormat): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Actions\DownloadArtifact($owner, $repo, $artifactId, $archiveFormat);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
