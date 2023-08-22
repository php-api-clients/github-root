<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListPreReceiveEnvironmentsListing
{
    public const OPERATION_ID    = 'enterprise-admin/list-pre-receive-environments';
    public const OPERATION_MATCH = 'LIST /admin/pre-receive-environments';
    private const METHOD         = 'GET';
    private const PATH           = '/admin/pre-receive-environments';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Admin\PreReceiveEnvironments $hydrator)
    {
    }

    /** @return iterable<Schema\PreReceiveEnvironment> */
    public function call(int $perPage = 30, int $page = 1, string $direction = 'desc', string $sort = 'created'): iterable
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin\ListPreReceiveEnvironmentsListing($this->responseSchemaValidator, $this->hydrator, $perPage, $page, $direction, $sort);
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
