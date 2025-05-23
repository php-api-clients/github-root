<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Migrations;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\Migration;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetStatusForOrg
{
    public const OPERATION_ID    = 'migrations/get-status-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/migrations/{migration_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $migrationId, array $exclude): Migration
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Migrations\GetStatusForOrg($this->responseSchemaValidator, $this->hydrator, $org, $migrationId, $exclude);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Migration {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
