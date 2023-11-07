<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Orgs;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;
use function str_replace;

final class ListSamlSsoAuthorizationsListing
{
    public const OPERATION_ID    = 'orgs/list-saml-sso-authorizations';
    public const OPERATION_MATCH = 'LIST /orgs/{org}/credential-authorizations';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**Page token **/
    private int $page;
    /**Limits the list of credentials authorizations for an organization to a specific login **/
    private string $login;
    /**The number of results per page (max 100). **/
    private int $perPage;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\CredentialAuthorizations $hydrator, string $org, int $page, string $login, int $perPage = 30)
    {
        $this->org     = $org;
        $this->page    = $page;
        $this->login   = $login;
        $this->perPage = $perPage;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{org}', '{page}', '{login}', '{per_page}'], [$this->org, $this->page, $this->login, $this->perPage], '/orgs/{org}/credential-authorizations' . '?page={page}&login={login}&per_page={per_page}'));
    }

    /** @return Observable<Schema\CredentialAuthorization> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\CredentialAuthorization {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\CredentialAuthorization::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\CredentialAuthorization::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
