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

final class GetActionsCacheList
{
    public const OPERATION_ID    = 'actions/get-actions-cache-list';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/caches';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The full Git reference for narrowing down the cache. The `ref` for a branch should be formatted as `refs/heads/<branch name>`. To reference a pull request use `refs/pull/<number>/merge`. **/
    private string $ref;
    /**An explicit key or prefix for identifying the cache **/
    private string $key;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;
    /**The property to sort the results by. `created_at` means when the cache was created. `last_accessed_at` means when the cache was last accessed. `size_in_bytes` is the size of the cache in bytes. **/
    private string $sort;
    /**The direction to sort the results by. **/
    private string $direction;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Caches $hydrator, string $owner, string $repo, string $ref, string $key, int $perPage = 30, int $page = 1, string $sort = 'last_accessed_at', string $direction = 'desc')
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->ref                     = $ref;
        $this->key                     = $key;
        $this->perPage                 = $perPage;
        $this->page                    = $page;
        $this->sort                    = $sort;
        $this->direction               = $direction;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/repos/{owner}/{repo}/actions/caches{?direction,key,page,per_page,ref,sort}'))->expand(['direction' => $this->direction, 'key' => $this->key, 'owner' => $this->owner, 'page' => $this->page, 'per_page' => $this->perPage, 'ref' => $this->ref, 'repo' => $this->repo, 'sort' => $this->sort]));
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
