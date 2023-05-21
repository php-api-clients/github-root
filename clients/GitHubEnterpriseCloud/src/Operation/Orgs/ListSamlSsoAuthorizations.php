<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListSamlSsoAuthorizations
{
    public const OPERATION_ID    = 'orgs/list-saml-sso-authorizations';
    public const OPERATION_MATCH = 'GET /orgs/{org}/credential-authorizations';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/credential-authorizations';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**Page token **/
    private int $page;
    /**Limits the list of credentials authorizations for an organization to a specific login **/
    private string $login;
    /**The number of results per page (max 100). **/
    private int $perPage;

    public function __construct(string $org, int $page, string $login, int $perPage = 30)
    {
        $this->org     = $org;
        $this->page    = $page;
        $this->login   = $login;
        $this->perPage = $perPage;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{page}', '{login}', '{per_page}'], [$this->org, $this->page, $this->login, $this->perPage], self::PATH . '?page={page}&login={login}&per_page={per_page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
