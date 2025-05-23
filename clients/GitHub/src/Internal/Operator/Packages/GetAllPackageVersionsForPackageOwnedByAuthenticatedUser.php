<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Packages;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetAllPackageVersionsForPackageOwnedByAuthenticatedUser
{
    public const OPERATION_ID    = 'packages/get-all-package-versions-for-package-owned-by-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/packages/{package_type}/{package_name}/versions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions $hydrator)
    {
    }

    /** @return Observable<Schema\PackageVersion> */
    public function call(string $packageType, string $packageName, int $page = 1, int $perPage = 30, string $state = 'active'): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $packageType, $packageName, $page, $perPage, $state);
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
