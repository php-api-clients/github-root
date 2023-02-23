<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class CodeScanningAlertRule
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":["string","null"],"description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string","description":"The name of the rule used to detect the alert."},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"description":{"type":"string","description":"A short description of the rule used to detect the alert."},"full_description":{"type":"string","description":"description of the rule used to detect the alert."},"tags":{"type":["array","null"],"items":{"type":"string"},"description":"A set of tags applicable for the rule."},"help":{"type":["string","null"],"description":"Detailed documentation for the rule as GitHub Flavored Markdown."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":"generated_id","name":"generated_name","severity":"generated_severity","description":"generated_description","full_description":"generated_full_description","tags":"generated_tags","help":"generated_help"}';
    /**
     * A unique identifier for the rule used to detect the alert.
     */
    public ?string $id;
    /**
     * The name of the rule used to detect the alert.
     */
    public ?string $name;
    /**
     * The severity of the alert.
     */
    public ?string $severity;
    /**
     * A short description of the rule used to detect the alert.
     */
    public ?string $description;
    /**
     * description of the rule used to detect the alert.
     */
    public ?string $full_description;
    /**
     * A set of tags applicable for the rule.
     */
    public ?array $tags;
    /**
     * Detailed documentation for the rule as GitHub Flavored Markdown.
     */
    public ?string $help;
    public function __construct(string $id, string $name, string $severity, string $description, string $full_description, array $tags, string $help)
    {
        $this->id = $id;
        $this->name = $name;
        $this->severity = $severity;
        $this->description = $description;
        $this->full_description = $full_description;
        $this->tags = $tags;
        $this->help = $help;
    }
}
