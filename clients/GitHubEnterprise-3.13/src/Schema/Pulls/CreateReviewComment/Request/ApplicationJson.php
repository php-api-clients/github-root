<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Pulls\CreateReviewComment\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "body",
        "commit_id",
        "path"
    ],
    "type": "object",
    "properties": {
        "body": {
            "type": "string",
            "description": "The text of the review comment."
        },
        "commit_id": {
            "type": "string",
            "description": "The SHA of the commit needing a comment. Not using the latest commit SHA may render your comment outdated if a subsequent commit modifies the line you specify as the `position`."
        },
        "path": {
            "type": "string",
            "description": "The relative path to the file that necessitates a comment."
        },
        "position": {
            "type": "integer",
            "description": "**This parameter is closing down. Use `line` instead**. The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. The position value equals the number of lines down from the first \\"@@\\" hunk header in the file you want to add a comment. The line just below the \\"@@\\" line is position 1, the next line is position 2, and so on. The position in the diff continues to increase through lines of whitespace and additional hunks until the beginning of a new file.",
            "deprecated": true,
            "x-github": {
                "deprecationDate": "2022-11-01"
            }
        },
        "side": {
            "enum": [
                "LEFT",
                "RIGHT"
            ],
            "type": "string",
            "description": "In a split diff view, the side of the diff that the pull request\'s changes appear on. Can be `LEFT` or `RIGHT`. Use `LEFT` for deletions that appear in red. Use `RIGHT` for additions that appear in green or unchanged lines that appear in white and are shown for context. For a multi-line comment, side represents whether the last line of the comment range is a deletion or addition. For more information, see \\"[Diff view options](https:\\/\\/docs.github.com\\/enterprise-server@3.13\\/articles\\/about-comparing-branches-in-pull-requests#diff-view-options)\\" in the GitHub Help documentation."
        },
        "line": {
            "type": "integer",
            "description": "**Required unless using `subject_type:file`**. The line of the blob in the pull request diff that the comment applies to. For a multi-line comment, the last line of the range that your comment applies to."
        },
        "start_line": {
            "type": "integer",
            "description": "**Required when using multi-line comments unless using `in_reply_to`**. The `start_line` is the first line in the pull request diff that your multi-line comment applies to. To learn more about multi-line comments, see \\"[Commenting on a pull request](https:\\/\\/docs.github.com\\/enterprise-server@3.13\\/articles\\/commenting-on-a-pull-request#adding-line-comments-to-a-pull-request)\\" in the GitHub Help documentation."
        },
        "start_side": {
            "enum": [
                "LEFT",
                "RIGHT",
                "side"
            ],
            "type": "string",
            "description": "**Required when using multi-line comments unless using `in_reply_to`**. The `start_side` is the starting side of the diff that the comment applies to. Can be `LEFT` or `RIGHT`. To learn more about multi-line comments, see \\"[Commenting on a pull request](https:\\/\\/docs.github.com\\/enterprise-server@3.13\\/articles\\/commenting-on-a-pull-request#adding-line-comments-to-a-pull-request)\\" in the GitHub Help documentation. See `side` in this table for additional context."
        },
        "in_reply_to": {
            "type": "integer",
            "description": "The ID of the review comment to reply to. To find the ID of a review comment with [\\"List review comments on a pull request\\"](#list-review-comments-on-a-pull-request). When specified, all parameters other than `body` in the request body are ignored.",
            "examples": [
                2
            ]
        },
        "subject_type": {
            "enum": [
                "line",
                "file"
            ],
            "type": "string",
            "description": "The level at which the comment is targeted."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "body": "generated",
    "commit_id": "generated",
    "path": "generated",
    "position": 8,
    "side": "RIGHT",
    "line": 4,
    "start_line": 10,
    "start_side": "side",
    "in_reply_to": 2,
    "subject_type": "file"
}';

    /**
     * body: The text of the review comment.
     * commitId: The SHA of the commit needing a comment. Not using the latest commit SHA may render your comment outdated if a subsequent commit modifies the line you specify as the `position`.
     * path: The relative path to the file that necessitates a comment.
     * position: **This parameter is closing down. Use `line` instead**. The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. The position value equals the number of lines down from the first "@@" hunk header in the file you want to add a comment. The line just below the "@@" line is position 1, the next line is position 2, and so on. The position in the diff continues to increase through lines of whitespace and additional hunks until the beginning of a new file.
     * side: In a split diff view, the side of the diff that the pull request's changes appear on. Can be `LEFT` or `RIGHT`. Use `LEFT` for deletions that appear in red. Use `RIGHT` for additions that appear in green or unchanged lines that appear in white and are shown for context. For a multi-line comment, side represents whether the last line of the comment range is a deletion or addition. For more information, see "[Diff view options](https://docs.github.com/enterprise-server@3.13/articles/about-comparing-branches-in-pull-requests#diff-view-options)" in the GitHub Help documentation.
     * line: **Required unless using `subject_type:file`**. The line of the blob in the pull request diff that the comment applies to. For a multi-line comment, the last line of the range that your comment applies to.
     * startLine: **Required when using multi-line comments unless using `in_reply_to`**. The `start_line` is the first line in the pull request diff that your multi-line comment applies to. To learn more about multi-line comments, see "[Commenting on a pull request](https://docs.github.com/enterprise-server@3.13/articles/commenting-on-a-pull-request#adding-line-comments-to-a-pull-request)" in the GitHub Help documentation.
     * startSide: **Required when using multi-line comments unless using `in_reply_to`**. The `start_side` is the starting side of the diff that the comment applies to. Can be `LEFT` or `RIGHT`. To learn more about multi-line comments, see "[Commenting on a pull request](https://docs.github.com/enterprise-server@3.13/articles/commenting-on-a-pull-request#adding-line-comments-to-a-pull-request)" in the GitHub Help documentation. See `side` in this table for additional context.
     * inReplyTo: The ID of the review comment to reply to. To find the ID of a review comment with ["List review comments on a pull request"](#list-review-comments-on-a-pull-request). When specified, all parameters other than `body` in the request body are ignored.
     * subjectType: The level at which the comment is targeted.
     */
    public function __construct(public string $body, #[MapFrom('commit_id')]
    public string $commitId, public string $path, public int|null $position, public string|null $side, public int|null $line, #[MapFrom('start_line')]
    public int|null $startLine, #[MapFrom('start_side')]
    public string|null $startSide, #[MapFrom('in_reply_to')]
    public int|null $inReplyTo, #[MapFrom('subject_type')]
    public string|null $subjectType,)
    {
    }
}
