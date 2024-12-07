<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\UploadReleaseAsset\Request;

final readonly class ApplicationOctetStream implements \ApiClients\Client\GitHub\Contract\Repos\UploadReleaseAsset\Request\ApplicationOctetStream
{
    const SCHEMA_JSON = '{
    "type": "string",
    "description": "The raw file data",
    "format": "binary"
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The raw file data';
    const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
