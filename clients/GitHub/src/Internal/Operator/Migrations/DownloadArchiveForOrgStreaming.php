<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Migrations;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DownloadArchiveForOrgStreaming
{
    public const OPERATION_ID    = 'migrations/download-archive-for-org';
    public const OPERATION_MATCH = 'STREAM /orgs/{org}/migrations/{migration_id}/archive';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Archive $hydrator)
    {
    }

    /** @return Observable<string> */
    public function call(string $org, int $migrationId): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Migrations\DownloadArchiveForOrgStreaming($this->responseSchemaValidator, $this->hydrator, $this->browser, $org, $migrationId);
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
