<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Actions;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteSelfHostedRunnerFromRepo
{
    public const OPERATION_ID    = 'actions/delete-self-hosted-runner-from-repo';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}';
    /**Unique identifier of the self-hosted runner. **/
    private int $runnerId;

    public function __construct(private string $owner, private string $repo, int $runnerId)
    {
        $this->runnerId = $runnerId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{owner}', '{repo}', '{runner_id}'], [$this->owner, $this->repo, $this->runnerId], '/repos/{owner}/{repo}/actions/runners/{runner_id}'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
