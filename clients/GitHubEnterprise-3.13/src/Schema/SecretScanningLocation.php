<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Internal\Attribute\CastUnionToType\Schema\SecretScanningLocation\Details;
use ApiClients\Client\GitHubEnterprise\Schema;

final readonly class SecretScanningLocation
{
    public const SCHEMA_JSON         = '{
    "required": [
        "type",
        "details"
    ],
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "commit",
                "issue_title",
                "issue_body",
                "issue_comment",
                "discussion_title",
                "discussion_body",
                "discussion_comment",
                "pull_request_title",
                "pull_request_body",
                "pull_request_comment",
                "pull_request_review",
                "pull_request_review_comment"
            ],
            "type": "string",
            "description": "The location type. Because secrets may be found in different types of resources (ie. code, comments, issues, pull requests, discussions), this field identifies the type of resource where the secret was found.",
            "examples": [
                "commit"
            ]
        },
        "details": {
            "oneOf": [
                {
                    "required": [
                        "path",
                        "start_line",
                        "end_line",
                        "start_column",
                        "end_column",
                        "blob_sha",
                        "blob_url",
                        "commit_sha",
                        "commit_url"
                    ],
                    "type": "object",
                    "properties": {
                        "path": {
                            "type": "string",
                            "description": "The file path in the repository",
                            "examples": [
                                "\\/example\\/secrets.txt"
                            ]
                        },
                        "start_line": {
                            "type": "number",
                            "description": "Line number at which the secret starts in the file"
                        },
                        "end_line": {
                            "type": "number",
                            "description": "Line number at which the secret ends in the file"
                        },
                        "start_column": {
                            "type": "number",
                            "description": "The column at which the secret starts within the start line when the file is interpreted as 8BIT ASCII"
                        },
                        "end_column": {
                            "type": "number",
                            "description": "The column at which the secret ends within the end line when the file is interpreted as 8BIT ASCII"
                        },
                        "blob_sha": {
                            "type": "string",
                            "description": "SHA-1 hash ID of the associated blob",
                            "examples": [
                                "af5626b4a114abcb82d63db7c8082c3c4756e51b"
                            ]
                        },
                        "blob_url": {
                            "type": "string",
                            "description": "The API URL to get the associated blob resource"
                        },
                        "commit_sha": {
                            "type": "string",
                            "description": "SHA-1 hash ID of the associated commit",
                            "examples": [
                                "af5626b4a114abcb82d63db7c8082c3c4756e51b"
                            ]
                        },
                        "commit_url": {
                            "type": "string",
                            "description": "The API URL to get the associated commit resource"
                        }
                    },
                    "description": "Represents a \'commit\' secret scanning location type. This location type shows that a secret was detected inside a commit to a repository."
                },
                {
                    "required": [
                        "issue_title_url"
                    ],
                    "type": "object",
                    "properties": {
                        "issue_title_url": {
                            "type": "string",
                            "description": "The API URL to get the issue where the secret was detected.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/1347"
                            ]
                        }
                    },
                    "description": "Represents an \'issue_title\' secret scanning location type. This location type shows that a secret was detected in the title of an issue."
                },
                {
                    "required": [
                        "issue_body_url"
                    ],
                    "type": "object",
                    "properties": {
                        "issue_body_url": {
                            "type": "string",
                            "description": "The API URL to get the issue where the secret was detected.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/1347"
                            ]
                        }
                    },
                    "description": "Represents an \'issue_body\' secret scanning location type. This location type shows that a secret was detected in the body of an issue."
                },
                {
                    "required": [
                        "issue_comment_url"
                    ],
                    "type": "object",
                    "properties": {
                        "issue_comment_url": {
                            "type": "string",
                            "description": "The API URL to get the issue comment where the secret was detected.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments\\/1081119451"
                            ]
                        }
                    },
                    "description": "Represents an \'issue_comment\' secret scanning location type. This location type shows that a secret was detected in a comment on an issue."
                },
                {
                    "required": [
                        "discussion_title_url"
                    ],
                    "type": "object",
                    "properties": {
                        "discussion_title_url": {
                            "type": "string",
                            "description": "The URL to the discussion where the secret was detected.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/github.com\\/community\\/community\\/discussions\\/39082"
                            ]
                        }
                    },
                    "description": "Represents a \'discussion_title\' secret scanning location type. This location type shows that a secret was detected in the title of a discussion."
                },
                {
                    "required": [
                        "discussion_body_url"
                    ],
                    "type": "object",
                    "properties": {
                        "discussion_body_url": {
                            "type": "string",
                            "description": "The URL to the discussion where the secret was detected.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/github.com\\/community\\/community\\/discussions\\/39082#discussion-4566270"
                            ]
                        }
                    },
                    "description": "Represents a \'discussion_body\' secret scanning location type. This location type shows that a secret was detected in the body of a discussion."
                },
                {
                    "required": [
                        "discussion_comment_url"
                    ],
                    "type": "object",
                    "properties": {
                        "discussion_comment_url": {
                            "type": "string",
                            "description": "The API URL to get the discussion comment where the secret was detected.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/github.com\\/community\\/community\\/discussions\\/39082#discussioncomment-4158232"
                            ]
                        }
                    },
                    "description": "Represents a \'discussion_comment\' secret scanning location type. This location type shows that a secret was detected in a comment on a discussion."
                },
                {
                    "required": [
                        "pull_request_title_url"
                    ],
                    "type": "object",
                    "properties": {
                        "pull_request_title_url": {
                            "type": "string",
                            "description": "The API URL to get the pull request where the secret was detected.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/2846"
                            ]
                        }
                    },
                    "description": "Represents a \'pull_request_title\' secret scanning location type. This location type shows that a secret was detected in the title of a pull request."
                },
                {
                    "required": [
                        "pull_request_body_url"
                    ],
                    "type": "object",
                    "properties": {
                        "pull_request_body_url": {
                            "type": "string",
                            "description": "The API URL to get the pull request where the secret was detected.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/2846"
                            ]
                        }
                    },
                    "description": "Represents a \'pull_request_body\' secret scanning location type. This location type shows that a secret was detected in the body of a pull request."
                },
                {
                    "required": [
                        "pull_request_comment_url"
                    ],
                    "type": "object",
                    "properties": {
                        "pull_request_comment_url": {
                            "type": "string",
                            "description": "The API URL to get the pull request comment where the secret was detected.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments\\/1081119451"
                            ]
                        }
                    },
                    "description": "Represents a \'pull_request_comment\' secret scanning location type. This location type shows that a secret was detected in a comment on a pull request."
                },
                {
                    "required": [
                        "pull_request_review_url"
                    ],
                    "type": "object",
                    "properties": {
                        "pull_request_review_url": {
                            "type": "string",
                            "description": "The API URL to get the pull request review where the secret was detected.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/2846\\/reviews\\/80"
                            ]
                        }
                    },
                    "description": "Represents a \'pull_request_review\' secret scanning location type. This location type shows that a secret was detected in a review on a pull request."
                },
                {
                    "required": [
                        "pull_request_review_comment_url"
                    ],
                    "type": "object",
                    "properties": {
                        "pull_request_review_comment_url": {
                            "type": "string",
                            "description": "The API URL to get the pull request review comment where the secret was detected.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/12"
                            ]
                        }
                    },
                    "description": "Represents a \'pull_request_review_comment\' secret scanning location type. This location type shows that a secret was detected in a review comment on a pull request."
                }
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "commit",
    "details": null
}';

    /**
     * type: The location type. Because secrets may be found in different types of resources (ie. code, comments, issues, pull requests, discussions), this field identifies the type of resource where the secret was found.
     */
    public function __construct(public string $type, #[Details]
    public Schema\SecretScanningLocationCommit|Schema\SecretScanningLocationIssueTitle|Schema\SecretScanningLocationIssueBody|Schema\SecretScanningLocationIssueComment|Schema\SecretScanningLocationDiscussionTitle|Schema\SecretScanningLocationDiscussionBody|Schema\SecretScanningLocationDiscussionComment|Schema\SecretScanningLocationPullRequestTitle|Schema\SecretScanningLocationPullRequestBody|Schema\SecretScanningLocationPullRequestComment|Schema\SecretScanningLocationPullRequestReview|Schema\SecretScanningLocationPullRequestReviewComment $details,)
    {
    }
}
