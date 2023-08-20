<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Apps;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\ContentReferenceAttachment;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CreateContentAttachment
{
    public const OPERATION_ID    = 'apps/create-content-attachment';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/content_references/{content_reference_id}/attachments';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/content_references/{content_reference_id}/attachments';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\ContentReferences\ContentReferenceId\Attachments $hydrator)
    {
    }

    /** @return (Schema\ContentReferenceAttachment | array{code: int}) */
    public function call(string $owner, string $repo, int $contentReferenceId, array $params): ContentReferenceAttachment|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Apps\CreateContentAttachment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $contentReferenceId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ContentReferenceAttachment|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
