<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Checks\Create\Request\ApplicationJson;

final readonly class Output
{
    public const SCHEMA_JSON         = '{
    "required": [
        "title",
        "summary"
    ],
    "type": "object",
    "properties": {
        "title": {
            "type": "string",
            "description": "The title of the check run."
        },
        "summary": {
            "maxLength": 65535,
            "type": "string",
            "description": "The summary of the check run. This parameter supports Markdown."
        },
        "text": {
            "maxLength": 65535,
            "type": "string",
            "description": "The details of the check run. This parameter supports Markdown."
        },
        "annotations": {
            "maxItems": 50,
            "type": "array",
            "items": {
                "required": [
                    "path",
                    "start_line",
                    "end_line",
                    "annotation_level",
                    "message"
                ],
                "type": "object",
                "properties": {
                    "path": {
                        "type": "string",
                        "description": "The path of the file to add an annotation to. For example, `assets\\/css\\/main.css`."
                    },
                    "start_line": {
                        "type": "integer",
                        "description": "The start line of the annotation."
                    },
                    "end_line": {
                        "type": "integer",
                        "description": "The end line of the annotation."
                    },
                    "start_column": {
                        "type": "integer",
                        "description": "The start column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values."
                    },
                    "end_column": {
                        "type": "integer",
                        "description": "The end column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values."
                    },
                    "annotation_level": {
                        "enum": [
                            "notice",
                            "warning",
                            "failure"
                        ],
                        "type": "string",
                        "description": "The level of the annotation."
                    },
                    "message": {
                        "type": "string",
                        "description": "A short description of the feedback for these lines of code. The maximum size is 64 KB."
                    },
                    "title": {
                        "type": "string",
                        "description": "The title that represents the annotation. The maximum size is 255 characters."
                    },
                    "raw_details": {
                        "type": "string",
                        "description": "Details about this annotation. The maximum size is 64 KB."
                    }
                }
            },
            "description": "Adds information from your analysis to specific lines of code. Annotations are visible on GitHub in the **Checks** and **Files changed** tab of the pull request. The Checks API limits the number of annotations to a maximum of 50 per API request. To create more than 50 annotations, you have to make multiple requests to the [Update a check run](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/checks#update-a-check-run) endpoint. Each time you update the check run, annotations are appended to the list of annotations that already exist for the check run. For details about how you can view annotations on GitHub, see \\"[About status checks](https:\\/\\/docs.github.com\\/articles\\/about-status-checks#checks)\\". See the [`annotations` object](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/checks#annotations-object) description for details about how to use this parameter."
        },
        "images": {
            "type": "array",
            "items": {
                "required": [
                    "alt",
                    "image_url"
                ],
                "type": "object",
                "properties": {
                    "alt": {
                        "type": "string",
                        "description": "The alternative text for the image."
                    },
                    "image_url": {
                        "type": "string",
                        "description": "The full URL of the image."
                    },
                    "caption": {
                        "type": "string",
                        "description": "A short image description."
                    }
                }
            },
            "description": "Adds images to the output displayed in the GitHub pull request UI. See the [`images` object](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/checks#images-object) description for details."
        }
    },
    "description": "Check runs can accept a variety of data in the `output` object, including a `title` and `summary` and can optionally provide descriptive details about the run. See the [`output` object](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/checks#output-object) description."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Check runs can accept a variety of data in the `output` object, including a `title` and `summary` and can optionally provide descriptive details about the run. See the [`output` object](https://docs.github.com/enterprise-server@3.1/rest/reference/checks#output-object) description.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "title": "generated",
    "summary": "generated",
    "text": "generated",
    "annotations": [
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        },
        {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10,
            "annotation_level": "failure",
            "message": "generated",
            "title": "generated",
            "raw_details": "generated"
        }
    ],
    "images": [
        {
            "alt": "generated",
            "image_url": "generated",
            "caption": "generated"
        },
        {
            "alt": "generated",
            "image_url": "generated",
            "caption": "generated"
        }
    ]
}';

    /**
     * title: The title of the check run.
     * summary: The summary of the check run. This parameter supports Markdown.
     * text: The details of the check run. This parameter supports Markdown.
     * annotations: Adds information from your analysis to specific lines of code. Annotations are visible on GitHub in the **Checks** and **Files changed** tab of the pull request. The Checks API limits the number of annotations to a maximum of 50 per API request. To create more than 50 annotations, you have to make multiple requests to the [Update a check run](https://docs.github.com/enterprise-server@3.1/rest/reference/checks#update-a-check-run) endpoint. Each time you update the check run, annotations are appended to the list of annotations that already exist for the check run. For details about how you can view annotations on GitHub, see "[About status checks](https://docs.github.com/articles/about-status-checks#checks)". See the [`annotations` object](https://docs.github.com/enterprise-server@3.1/rest/reference/checks#annotations-object) description for details about how to use this parameter.
     * images: Adds images to the output displayed in the GitHub pull request UI. See the [`images` object](https://docs.github.com/enterprise-server@3.1/rest/reference/checks#images-object) description for details.
     */
    public function __construct(public string $title, public string $summary, public string|null $text, public array|null $annotations, public array|null $images)
    {
    }
}
