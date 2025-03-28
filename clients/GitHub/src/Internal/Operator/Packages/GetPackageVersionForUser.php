<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Packages;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\PackageVersion;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetPackageVersionForUser
{
    public const OPERATION_ID    = 'packages/get-package-version-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId $hydrator)
    {
    }

    /** @return */
    public function call(string $packageType, string $packageName, int $packageVersionId, string $username): PackageVersion
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Packages\GetPackageVersionForUser($this->responseSchemaValidator, $this->hydrator, $packageType, $packageName, $packageVersionId, $username);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PackageVersion {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
