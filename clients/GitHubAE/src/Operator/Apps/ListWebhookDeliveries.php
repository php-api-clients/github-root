<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Apps;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListWebhookDeliveries
{
    public const OPERATION_ID    = 'apps/list-webhook-deliveries';
    public const OPERATION_MATCH = 'GET /app/hook/deliveries';
    private const METHOD         = 'GET';
    private const PATH           = '/app/hook/deliveries';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\App\Hook\Deliveries $hydrator)
    {
    }

    /**
     * @return PromiseInterface<mixed>
     **/
    public function call(string $cursor, bool $redelivery, int $perPage = 30): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Apps\ListWebhookDeliveries($this->responseSchemaValidator, $this->hydrator, $cursor, $redelivery, $perPage);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
