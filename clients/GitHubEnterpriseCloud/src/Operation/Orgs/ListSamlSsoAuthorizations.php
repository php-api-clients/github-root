<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\Orgs;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
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

final class ListSamlSsoAuthorizations
{
    public const OPERATION_ID    = 'orgs/list-saml-sso-authorizations';
    public const OPERATION_MATCH = 'GET /orgs/{org}/credential-authorizations';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/credential-authorizations';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Page token**/
    private int $page;
    /**Limits the list of credentials authorizations for an organization to a specific login**/
    private string $login;
    /**The number of results per page (max 100).**/
    private int $perPage;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\CredentialAuthorizations $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\CredentialAuthorizations $hydrator, string $org, int $page, string $login, int $perPage = 30)
    {
        $this->org                     = $org;
        $this->page                    = $page;
        $this->login                   = $login;
        $this->perPage                 = $perPage;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{page}', '{login}', '{per_page}'], [$this->org, $this->page, $this->login, $this->perPage], self::PATH . '?page={page}&login={login}&per_page={per_page}'));
    }

    /**
     * @return Observable<Schema\CredentialAuthorization>
     */
    public function createResponse(ResponseInterface $response): Observable
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
                            $this->responseSchemaValidator->validate($bodyItem, Reader::readFromJson(Schema\CredentialAuthorization::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\CredentialAuthorization {
                            return $this->hydrator->hydrateObject(Schema\CredentialAuthorization::class, $body);
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
