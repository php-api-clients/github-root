<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\CreateFork\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"properties":{"organization":{"type":"string","description":"Optional parameter to specify the organization name if forking into an organization."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"organization":"generated"}';

    /**
     * organization: Optional parameter to specify the organization name if forking into an organization.
     */
    public function __construct(public ?string $organization)
    {
    }
}
