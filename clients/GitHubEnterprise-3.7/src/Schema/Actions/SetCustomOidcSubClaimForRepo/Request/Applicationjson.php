<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Actions\SetCustomOidcSubClaimForRepo\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"title":"Actions OIDC subject customization for a repository","required":["use_default"],"type":"object","properties":{"use_default":{"type":"boolean","description":"Whether to use the default template or not."}},"description":"Actions OIDC subject customization for a repository"}';
    public const SCHEMA_TITLE = 'Actions OIDC subject customization for a repository';
    public const SCHEMA_DESCRIPTION = 'Actions OIDC subject customization for a repository';
    public const SCHEMA_EXAMPLE_DATA = '{"use_default":false}';
    /**
     * useDefault: Whether to use the default template or not.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('use_default')] public bool $useDefault)
    {
    }
}
