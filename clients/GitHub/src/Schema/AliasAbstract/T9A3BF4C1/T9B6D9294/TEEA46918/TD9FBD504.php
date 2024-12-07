<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T9A3BF4C1\T9B6D9294\TEEA46918;

abstract readonly class TD9FBD504 implements \ApiClients\Client\GitHub\Contract\Apps\CheckToken\Request\ApplicationJson
{
    const SCHEMA_JSON = '{
    "required": [
        "access_token"
    ],
    "type": "object",
    "properties": {
        "access_token": {
            "type": "string",
            "description": "The access_token of the OAuth or GitHub application."
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "access_token": "generated"
}';
    /**
     * accessToken: The access_token of the OAuth or GitHub application.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('access_token')] public string $accessToken)
    {
    }
}
