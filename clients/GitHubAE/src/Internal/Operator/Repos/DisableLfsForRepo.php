<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Repos;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DisableLfsForRepo
{
    public const OPERATION_ID    = 'repos/disable-lfs-for-repo';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/lfs';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function call(string $owner, string $repo): WithoutBody
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Repos\DisableLfsForRepo($owner, $repo);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
