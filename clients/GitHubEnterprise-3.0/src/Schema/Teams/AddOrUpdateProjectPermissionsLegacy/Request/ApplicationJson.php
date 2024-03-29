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
            "description": "The permission to grant to the team for this project. Can be one of:  \\n\\\\* `read` - team members can read, but not write to or administer this project.  \\n\\\\* `write` - team members can read and write, but not administer this project.  \\n\\\\* `admin` - team members can read, write and administer this project.  \\nDefault: the team\'s `permission` attribute will be used to determine what permission to grant the team on this project. Note that, if you choose not to pass any parameters, you\'ll need to set `Content-Length` to zero when calling out to this endpoint. For more information, see \\"[HTTP verbs](https:\\/\\/docs.github.com\\/enterprise-server@3.0\\/rest\\/overview\\/resources-in-the-rest-api#http-verbs).\\""
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "permission": "admin"
}';

    /**
     * permission: The permission to grant to the team for this project. Can be one of:
    \* `read` - team members can read, but not write to or administer this project.
    \* `write` - team members can read and write, but not administer this project.
    \* `admin` - team members can read, write and administer this project.
    Default: the team's `permission` attribute will be used to determine what permission to grant the team on this project. Note that, if you choose not to pass any parameters, you'll need to set `Content-Length` to zero when calling out to this endpoint. For more information, see "[HTTP verbs](https://docs.github.com/enterprise-server@3.0/rest/overview/resources-in-the-rest-api#http-verbs)."
     */
    public function __construct(public string|null $permission)
    {
    }
}
