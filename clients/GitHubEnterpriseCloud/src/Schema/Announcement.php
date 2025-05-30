<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Announcement
{
    public const SCHEMA_JSON         = '{
    "title": "Enterprise Announcement",
    "required": [
        "announcement"
    ],
    "type": "object",
    "properties": {
        "announcement": {
            "type": [
                "string",
                "null"
            ],
            "description": "The announcement text in GitHub Flavored Markdown. For more information about GitHub Flavored Markdown, see \\"[Basic writing and formatting syntax](https:\\/\\/docs.github.com\\/enterprise-cloud@latest\\/\\/github\\/writing-on-github\\/getting-started-with-writing-and-formatting-on-github\\/basic-writing-and-formatting-syntax).\\"",
            "examples": [
                "Very **important** announcement about _something_."
            ]
        },
        "expires_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The time at which the announcement expires. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. To set an announcement that never expires, omit this parameter, set it to `null`, or set it to an empty string.",
            "format": "date-time",
            "examples": [
                "\\"2021-01-01T00:00:00.000-07:00\\""
            ]
        },
        "user_dismissible": {
            "type": [
                "boolean",
                "null"
            ],
            "description": "Whether an announcement can be dismissed by the user.",
            "default": false,
            "examples": [
                false
            ]
        }
    },
    "description": "Enterprise global announcement"
}';
    public const SCHEMA_TITLE        = 'Enterprise Announcement';
    public const SCHEMA_DESCRIPTION  = 'Enterprise global announcement';
    public const SCHEMA_EXAMPLE_DATA = '{
    "announcement": "Very **important** announcement about _something_.",
    "expires_at": "\\"2021-01-01T00:00:00.000-07:00\\"",
    "user_dismissible": false
}';

    /**
     * announcement: The announcement text in GitHub Flavored Markdown. For more information about GitHub Flavored Markdown, see "[Basic writing and formatting syntax](https://docs.github.com/enterprise-cloud@latest//github/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax)."
     * expiresAt: The time at which the announcement expires. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. To set an announcement that never expires, omit this parameter, set it to `null`, or set it to an empty string.
     * userDismissible: Whether an announcement can be dismissed by the user.
     */
    public function __construct(public string|null $announcement, #[MapFrom('expires_at')]
    public string|null $expiresAt, #[MapFrom('user_dismissible')]
    public bool|null $userDismissible,)
    {
    }
}
