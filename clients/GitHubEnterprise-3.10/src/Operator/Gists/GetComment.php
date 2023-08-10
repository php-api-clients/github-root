<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Gists;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\GistComment;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetComment
{
    public const OPERATION_ID    = 'gists/get-comment';
    public const OPERATION_MATCH = 'GET /gists/{gist_id}/comments/{comment_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/gists/{gist_id}/comments/{comment_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Gists\GistId\Comments\CommentId $hydrator)
    {
    }

    /** @return PromiseInterface<GistComment|array> **/
    public function call(string $gistId, int $commentId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Gists\GetComment($this->responseSchemaValidator, $this->hydrator, $gistId, $commentId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GistComment|array {
            return $operation->createResponse($response);
        });
    }
}
