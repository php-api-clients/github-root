<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\CodesOfConduct;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetAllCodesOfConduct
{
    public const OPERATION_ID    = 'codes-of-conduct/get-all-codes-of-conduct';
    public const OPERATION_MATCH = 'GET /codes_of_conduct';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\CodesOfConduct $hydrator)
    {
    }

    /** @return Observable<Schema\CodeOfConduct>|WithoutBody */
    public function call(): iterable|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\CodesOfConduct\GetAllCodesOfConduct($this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
