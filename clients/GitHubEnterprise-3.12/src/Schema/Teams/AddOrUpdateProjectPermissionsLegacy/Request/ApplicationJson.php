<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Teams\AddOrUpdateProjectPermissionsLegacy\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "permission": {
            "enum": [
                "read",
                "write",
                "admin"
            ],
            "type": "string",
            "description": "The permission to grant to the team for this project. Default: the team\'s `permission` attribute will be used to determine what permission to grant the team on this project. Note that, if you choose not to pass any parameters, you\'ll need to set `Content-Length` to zero when calling this endpoint. For more information, see \\"[HTTP method](https:\\/\\/docs.github.com\\/enterprise-server@3.12\\/rest\\/guides\\/getting-started-with-the-rest-api#http-method).\\""
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "permission": "admin"
}';

    /**
     * permission: The permission to grant to the team for this project. Default: the team's `permission` attribute will be used to determine what permission to grant the team on this project. Note that, if you choose not to pass any parameters, you'll need to set `Content-Length` to zero when calling this endpoint. For more information, see "[HTTP method](https://docs.github.com/enterprise-server@3.12/rest/guides/getting-started-with-the-rest-api#http-method)."
     */
    public function __construct(public string|null $permission)
    {
    }
}
