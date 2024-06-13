<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Repos;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ContentDirectory;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ContentFile;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ContentSubmodule;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ContentSymlink;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetContent
{
    public const OPERATION_ID    = 'repos/get-content';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/contents/{path}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Contents\Path $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, string $path, string $ref): ContentDirectory|ContentFile|ContentSymlink|ContentSubmodule|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Repos\GetContent($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $path, $ref);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ContentDirectory|ContentFile|ContentSymlink|ContentSubmodule|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
