<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\AliasAbstract\Tiet8DAAD835\Tiet93FE8D1C\TietAC26D50C;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet27D4E07F
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "labeled_runners": {
            "type": "boolean",
            "description": "Whether to use runners labeled with \'dependency-submission\' or standard GitHub runners.",
            "default": false
        }
    },
    "description": "Feature options for Automatic dependency submission"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Feature options for Automatic dependency submission';
    public const SCHEMA_EXAMPLE_DATA = '{
    "labeled_runners": false
}';

    /**
     * labeledRunners: Whether to use runners labeled with 'dependency-submission' or standard GitHub runners.
     */
    public function __construct(#[MapFrom('labeled_runners')]
    public bool|null $labeledRunners,)
    {
    }
}
