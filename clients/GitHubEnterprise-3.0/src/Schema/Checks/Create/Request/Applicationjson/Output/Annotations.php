<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Checks\Create\Request\Applicationjson\Output;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Annotations
{
    public const SCHEMA_JSON = '{"required":["path","start_line","end_line","annotation_level","message"],"type":"object","properties":{"path":{"type":"string","description":"The path of the file to add an annotation to. For example, `assets\\/css\\/main.css`."},"start_line":{"type":"integer","description":"The start line of the annotation."},"end_line":{"type":"integer","description":"The end line of the annotation."},"start_column":{"type":"integer","description":"The start column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values."},"end_column":{"type":"integer","description":"The end column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values."},"annotation_level":{"enum":["notice","warning","failure"],"type":"string","description":"The level of the annotation. Can be one of `notice`, `warning`, or `failure`."},"message":{"type":"string","description":"A short description of the feedback for these lines of code. The maximum size is 64 KB."},"title":{"type":"string","description":"The title that represents the annotation. The maximum size is 255 characters."},"raw_details":{"type":"string","description":"Details about this annotation. The maximum size is 64 KB."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"path":"generated_path","start_line":13,"end_line":13,"start_column":13,"end_column":13,"annotation_level":"generated_annotation_level","message":"generated_message","title":"generated_title","raw_details":"generated_raw_details"}';
    /**
     * path: The path of the file to add an annotation to. For example, `assets/css/main.css`.
     * start_line: The start line of the annotation.
     * end_line: The end line of the annotation.
     * start_column: The start column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values.
     * end_column: The end column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values.
     * annotation_level: The level of the annotation. Can be one of `notice`, `warning`, or `failure`.
     * message: A short description of the feedback for these lines of code. The maximum size is 64 KB.
     * title: The title that represents the annotation. The maximum size is 255 characters.
     * raw_details: Details about this annotation. The maximum size is 64 KB.
     */
    public function __construct(public string $path, public int $start_line, public int $end_line, public ?int $start_column, public ?int $end_column, public string $annotation_level, public string $message, public ?string $title, public ?string $raw_details)
    {
    }
}
