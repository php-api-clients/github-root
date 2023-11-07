<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Repos;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteAccessRestrictions
{
    public const OPERATION_ID    = 'repos/delete-access-restrictions';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions';
    /**The name of the branch. **/
    private string $branch;

    public function __construct(private string $owner, private string $repo, string $branch)
    {
        $this->branch = $branch;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{owner}', '{repo}', '{branch}'], [$this->owner, $this->repo, $this->branch], '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions'));
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
