<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\CodeScanning;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningDefaultSetup;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetDefaultSetup
{
    public const OPERATION_ID    = 'code-scanning/get-default-setup';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/code-scanning/default-setup';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\DefaultSetup $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo): CodeScanningDefaultSetup
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\CodeScanning\GetDefaultSetup($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodeScanningDefaultSetup {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
