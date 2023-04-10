<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\EnterpriseAdmin\CreateImpersonationOAuthToken\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"scopes":{"type":"array","items":{"type":"string"},"description":"A list of [scopes](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/apps\\/building-oauth-apps\\/understanding-scopes-for-oauth-apps\\/)."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"scopes":["generated_scopes_null"]}';
    /**
     * scopes: A list of [scopes](https://docs.github.com/enterprise-server@3.1/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     * @param ?array<string> $scopes
     */
    public function __construct(public ?array $scopes)
    {
    }
}
