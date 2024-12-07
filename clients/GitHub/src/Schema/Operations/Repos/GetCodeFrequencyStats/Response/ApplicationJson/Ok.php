<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson;

use ApiClients\Client\GitHub\Contract\CodeFrequencyStat;

final readonly class Ok implements CodeFrequencyStat
{
    public const SCHEMA_JSON         = '{
    "type": "integer"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
