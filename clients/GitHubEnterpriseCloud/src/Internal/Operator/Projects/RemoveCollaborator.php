<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Projects;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class RemoveCollaborator
{
    public const OPERATION_ID    = 'projects/remove-collaborator';
    public const OPERATION_MATCH = 'DELETE /projects/{project_id}/collaborators/{username}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Projects\ProjectId\Collaborators\Username $hydrator)
    {
    }

    /** @return */
    public function call(int $projectId, string $username): WithoutBody
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Projects\RemoveCollaborator($this->responseSchemaValidator, $this->hydrator, $projectId, $username);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
