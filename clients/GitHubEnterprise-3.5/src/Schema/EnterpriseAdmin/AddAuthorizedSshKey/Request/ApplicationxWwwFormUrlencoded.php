<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\AddAuthorizedSshKey\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ApplicationxWwwFormUrlencoded
{
    public const SCHEMA_JSON = '{"required":["authorized_key"],"type":"object","properties":{"authorized_key":{"type":"string","description":"The public SSH key."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"authorized_key":"generated_authorized_key"}';
    /**
     * The public SSH key.
     */
    public ?string $authorized_key;
    public function __construct(string $authorized_key)
    {
        $this->authorized_key = $authorized_key;
    }
}
