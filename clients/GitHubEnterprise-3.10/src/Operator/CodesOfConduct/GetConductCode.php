<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\CodesOfConduct;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\CodeOfConduct;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetConductCode
{
    public const OPERATION_ID    = 'codes-of-conduct/get-conduct-code';
    public const OPERATION_MATCH = 'GET /codes_of_conduct/{key}';
    private const METHOD         = 'GET';
    private const PATH           = '/codes_of_conduct/{key}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\CodesOfConduct\Key $hydrator)
    {
    }

    /** @return (Schema\CodeOfConduct | array{code: int}) */
    public function call(string $key): CodeOfConduct|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\CodesOfConduct\GetConductCode($this->responseSchemaValidator, $this->hydrator, $key);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodeOfConduct|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
