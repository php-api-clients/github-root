<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operator\SecurityAdvisories;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GlobalAdvisory;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetGlobalAdvisory
{
    public const OPERATION_ID    = 'security-advisories/get-global-advisory';
    public const OPERATION_MATCH = 'GET /advisories/{ghsa_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/advisories/{ghsa_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Advisories\GhsaId $hydrator)
    {
    }

    /** @return PromiseInterface<GlobalAdvisory> **/
    public function call(string $ghsaId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Operation\SecurityAdvisories\GetGlobalAdvisory($this->responseSchemaValidator, $this->hydrator, $ghsaId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GlobalAdvisory {
            return $operation->createResponse($response);
        });
    }
}
