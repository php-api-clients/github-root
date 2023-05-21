<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\UpgradeLicense\Request;

final readonly class MultipartFormData
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"license":{"type":"string","description":"The content of your new _.ghl_ license file."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"license":"generated"}';

    /**
     * license: The content of your new _.ghl_ license file.
     */
    public function __construct(public ?string $license)
    {
    }
}
