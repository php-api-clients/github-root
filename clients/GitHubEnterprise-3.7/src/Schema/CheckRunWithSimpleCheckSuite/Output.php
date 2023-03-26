<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\CheckRunWithSimpleCheckSuite;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Output
{
    public const SCHEMA_JSON = '{"required":["title","summary","text","annotations_count","annotations_url"],"type":"object","properties":{"annotations_count":{"type":"integer"},"annotations_url":{"type":"string","format":"uri"},"summary":{"type":["string","null"]},"text":{"type":["string","null"]},"title":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"annotations_count":13,"annotations_url":"https:\\/\\/example.com\\/","summary":"generated_summary_null","text":"generated_text_null","title":"generated_title_null"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('annotations_count')] public int $annotationsCount, #[\EventSauce\ObjectHydrator\MapFrom('annotations_url')] public string $annotationsUrl, public ?string $summary, public ?string $text, public ?string $title)
    {
    }
}
