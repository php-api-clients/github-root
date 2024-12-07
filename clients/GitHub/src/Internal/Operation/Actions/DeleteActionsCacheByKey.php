<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Actions;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Caches;
use ApiClients\Client\GitHub\Schema\ActionsCacheList;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

use function explode;
use function json_decode;

final class DeleteActionsCacheByKey
{
    public const OPERATION_ID    = 'actions/delete-actions-cache-by-key';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/actions/caches';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**A key for identifying the cache. **/
    private string $key;
    /**The full Git reference for narrowing down the cache. The `ref` for a branch should be formatted as `refs/heads/<branch name>`. To reference a pull request use `refs/pull/<number>/merge`. **/
    private string $ref;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Caches $hydrator, string $owner, string $repo, string $key, string $ref)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->key                     = $key;
        $this->ref                     = $ref;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', (string) (new UriTemplate('/repos/{owner}/{repo}/actions/caches{?key,ref}'))->expand(['key' => $this->key, 'owner' => $this->owner, 'ref' => $this->ref, 'repo' => $this->repo]));
    }

    public function createResponse(ResponseInterface $response): ActionsCacheList
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ActionsCacheList::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(ActionsCacheList::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
