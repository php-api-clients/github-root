<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Projects;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListCardsListing
{
    public const OPERATION_ID    = 'projects/list-cards';
    public const OPERATION_MATCH = 'LIST /projects/columns/{column_id}/cards';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Projects\Columns\ColumnId\Cards $hydrator)
    {
    }

    /** @return Observable<Schema\ProjectCard>|WithoutBody */
    public function call(int $columnId, string $archivedState = 'not_archived', int $perPage = 30, int $page = 1): iterable|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Projects\ListCardsListing($this->responseSchemaValidator, $this->hydrator, $columnId, $archivedState, $perPage, $page);
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
