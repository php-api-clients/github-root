<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetServerStatistics
{
    public const OPERATION_ID    = 'enterprise-admin/get-server-statistics';
    public const OPERATION_MATCH = 'GET /enterprise-installation/{enterprise_or_org}/server-statistics';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprise-installation/{enterprise_or_org}/server-statistics';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\EnterpriseInstallation\EnterpriseOrOrg\ServerStatistics $hydrator)
    {
    }

    /** @return iterable<Schema\ServerStatistics> */
    public function call(string $enterpriseOrOrg, string $dateStart, string $dateEnd): iterable
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Operation\EnterpriseAdmin\GetServerStatistics($this->responseSchemaValidator, $this->hydrator, $enterpriseOrOrg, $dateStart, $dateEnd);
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
