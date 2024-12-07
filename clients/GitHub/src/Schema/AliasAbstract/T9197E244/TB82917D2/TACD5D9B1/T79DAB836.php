<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T9197E244\TB82917D2\TACD5D9B1;

use ApiClients\Client\GitHub\Contract\Apps\DeleteAuthorization\Request\ApplicationJson;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class T79DAB836 implements ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "access_token"
    ],
    "type": "object",
    "properties": {
        "access_token": {
            "type": "string",
            "description": "The OAuth access token used to authenticate to the GitHub API."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "access_token": "generated"
}';

    /**
     * accessToken: The OAuth access token used to authenticate to the GitHub API.
     */
    public function __construct(#[MapFrom('access_token')]
    public string $accessToken,)
    {
    }
}
