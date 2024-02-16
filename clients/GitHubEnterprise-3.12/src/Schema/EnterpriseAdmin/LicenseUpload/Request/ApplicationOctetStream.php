<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\LicenseUpload\Request;

final readonly class ApplicationOctetStream
{
    public const SCHEMA_JSON         = '{
    "type": "string",
    "description": "The enterprise license",
    "format": "binary"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The enterprise license';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
