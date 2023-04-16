<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Orgs;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;

use function explode;
use function json_decode;
use function str_replace;

final class ListMembers
{
    public const OPERATION_ID    = 'orgs/list-members';
    public const OPERATION_MATCH = 'GET /orgs/{org}/members';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/members';
    private string $org;
    /**Filter members returned in the list. Can be one of:
    \* `2fa_disabled` - Members without [two-factor authentication](https://github.com/blog/1614-two-factor-authentication) enabled. Available for organization owners.
    \* `all` - All members the authenticated user can see.**/
    private string $filter;
    /**Filter members returned by their role. Can be one of:
    \* `all` - All members of the organization, regardless of role.
    \* `admin` - Organization owners.
    \* `member` - Non-owner organization members.**/
    private string $role;
    /**Results per page (max 100)**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Members $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Members $hydrator, string $org, string $filter = 'all', string $role = 'all', int $perPage = 30, int $page = 1)
    {
        $this->org                     = $org;
        $this->filter                  = $filter;
        $this->role                    = $role;
        $this->perPage                 = $perPage;
        $this->page                    = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{filter}', '{role}', '{per_page}', '{page}'], [$this->org, $this->filter, $this->role, $this->perPage, $this->page], self::PATH . '?filter={filter}&role={role}&per_page={per_page}&page={page}'));
    }

    /**
     * @return Observable<Schema\SimpleUser>|array{code: int, location: string}
     */
    public function createResponse(ResponseInterface $response): Observable|array
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
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, Reader::readFromJson(Schema\SimpleUser::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\SimpleUser {
                            return $this->hydrator->hydrateObject(Schema\SimpleUser::class, $body);
                        });
                    /**
                     * Validation failed
                    **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\ValidationError(422, $this->hydrator->hydrateObject(Schema\ValidationError::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Response if requester is not an organization member
            **/
            case 302:
                return ['code' => 302, 'location' => $response->getHeaderLine('Location')];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
