<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class CodeScanningAlertRule
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":["string","null"],"description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string","description":"The name of the rule used to detect the alert."},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"description":{"type":"string","description":"A short description of the rule used to detect the alert."},"full_description":{"type":"string","description":"description of the rule used to detect the alert."},"tags":{"type":["array","null"],"items":{"type":"string"},"description":"A set of tags applicable for the rule."},"help":{"type":["string","null"],"description":"Detailed documentation for the rule as GitHub Flavored Markdown."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":"generated_id_null","name":"generated_name_null","severity":"none","description":"generated_description_null","full_description":"generated_full_description_null","tags":["generated_tags_null"],"help":"generated_help_null"}';
    /**
     * id: A unique identifier for the rule used to detect the alert.
     * name: The name of the rule used to detect the alert.
     * severity: The severity of the alert.
     * description: A short description of the rule used to detect the alert.
     * fullDescription: description of the rule used to detect the alert.
     * tags: A set of tags applicable for the rule.
     * @param ?array<string> $tags
     * help: Detailed documentation for the rule as GitHub Flavored Markdown.
     */
    public function __construct(public ?string $id, public ?string $name, public ?string $severity, public ?string $description, #[\EventSauce\ObjectHydrator\MapFrom('full_description')] public ?string $fullDescription, public ?array $tags, public ?string $help)
    {
    }
}
