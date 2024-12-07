<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T2A7E5464\TF7B694FB\T81AA0AE4;

use ApiClients\Client\GitHub\Contract\CodeSecurityConfiguration\DependencyGraphAutosubmitActionOptions;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class T09B0FC2A implements DependencyGraphAutosubmitActionOptions
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "labeled_runners": {
            "type": "boolean",
            "description": "Whether to use runners labeled with \'dependency-submission\' or standard GitHub runners."
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
