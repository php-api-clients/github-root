<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operator\Packages;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetAllPackageVersionsForPackageOwnedByUser
{
    public const OPERATION_ID    = 'packages/get-all-package-versions-for-package-owned-by-user';
    public const OPERATION_MATCH = 'GET /users/{username}/packages/{package_type}/{package_name}/versions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions $hydrator)
    {
    }

    /** @return Observable<Schema\PackageVersion> */
    public function call(string $packageType, string $packageName, string $username): iterable
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Internal\Operation\Packages\GetAllPackageVersionsForPackageOwnedByUser($this->responseSchemaValidator, $this->hydrator, $packageType, $packageName, $username);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
