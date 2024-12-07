<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T8249B116\TF3B5B097\T6B3D07C4;

use ApiClients\Client\GitHub\Contract\FileCommit\Commit\Parents;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class T1D00D525 implements Parents
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "url": {
            "type": "string"
        },
        "html_url": {
            "type": "string"
        },
        "sha": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "url": "generated",
    "html_url": "generated",
    "sha": "generated"
}';

    public function __construct(public string|null $url, #[MapFrom('html_url')]
    public string|null $htmlUrl, public string|null $sha,)
    {
    }
}
