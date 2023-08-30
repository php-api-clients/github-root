<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListPublicKeysListing
{
    public const OPERATION_ID    = 'enterprise-admin/list-public-keys';
    public const OPERATION_MATCH = 'LIST /admin/keys';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Admin\Keys $hydrator)
    {
    }

    /** @return Observable<Schema\PublicKeyFull> */
    public function call(string $since, int $perPage = 30, int $page = 1, string $direction = 'desc', string $sort = 'created'): iterable
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\EnterpriseAdmin\ListPublicKeysListing($this->responseSchemaValidator, $this->hydrator, $since, $perPage, $page, $direction, $sort);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
