<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Classroom;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListAssignmentsForAClassroomListing
{
    public const OPERATION_ID    = 'classroom/list-assignments-for-a-classroom';
    public const OPERATION_MATCH = 'LIST /classrooms/{classroom_id}/assignments';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Classrooms\ClassroomId\Assignments $hydrator)
    {
    }

    /** @return Observable<Schema\SimpleClassroomAssignment> */
    public function call(int $classroomId, int $page = 1, int $perPage = 30): iterable
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Classroom\ListAssignmentsForAClassroomListing($this->responseSchemaValidator, $this->hydrator, $classroomId, $page, $perPage);
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
