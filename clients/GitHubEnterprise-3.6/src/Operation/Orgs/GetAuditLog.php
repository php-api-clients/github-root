<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetAuditLog
{
    public const OPERATION_ID    = 'orgs/get-audit-log';
    public const OPERATION_MATCH = 'GET /orgs/{org}/audit-log';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/audit-log';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**A search phrase. For more information, see [Searching the audit log](https://docs.github.com/enterprise-server@3.6/github/setting-up-and-managing-organizations-and-teams/reviewing-the-audit-log-for-your-organization#searching-the-audit-log). **/
    private string $phrase;
    /**The event types to include:

    - `web` - returns web (non-Git) events.
    - `git` - returns Git events.
    - `all` - returns both web and Git events.

    The default is `web`. **/
    private string $include;
    /**A cursor, as given in the [Link header](https://docs.github.com/enterprise-server@3.6/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for events after this cursor. **/
    private string $after;
    /**A cursor, as given in the [Link header](https://docs.github.com/enterprise-server@3.6/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for events before this cursor. **/
    private string $before;
    /**The order of audit log events. To list newest events first, specify `desc`. To list oldest events first, specify `asc`.

    The default is `desc`. **/
    private string $order;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $org, string $phrase, string $include, string $after, string $before, string $order, int $perPage = 30, int $page = 1)
    {
        $this->org     = $org;
        $this->phrase  = $phrase;
        $this->include = $include;
        $this->after   = $after;
        $this->before  = $before;
        $this->order   = $order;
        $this->perPage = $perPage;
        $this->page    = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{phrase}', '{include}', '{after}', '{before}', '{order}', '{per_page}', '{page}'], [$this->org, $this->phrase, $this->include, $this->after, $this->before, $this->order, $this->perPage, $this->page], self::PATH . '?phrase={phrase}&include={include}&after={after}&before={before}&order={order}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
