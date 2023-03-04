<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\UpgradeLicense\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class MultipartformData
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"license":{"type":"string","description":"The content of your new _.ghl_ license file."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"license":"generated_license"}';
    /**
     * The content of your new _.ghl_ license file.
     */
    public ?string $license;
    public function __construct(string $license)
    {
        $this->license = $license;
    }
}
