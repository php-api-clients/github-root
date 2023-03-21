<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Users\SetPrimaryEmailVisibilityForAuthenticatedUser\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["visibility"],"type":"object","properties":{"visibility":{"enum":["public","private"],"type":"string","description":"Denotes whether an email is publicly visible."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"visibility":"public"}';
    /**
     * visibility: Denotes whether an email is publicly visible.
     */
    public function __construct(public string $visibility)
    {
    }
}
