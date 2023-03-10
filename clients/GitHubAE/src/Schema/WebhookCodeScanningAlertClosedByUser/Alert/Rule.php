<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookCodeScanningAlertClosedByUser\Alert;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Rule
{
    public const SCHEMA_JSON = '{"required":["id","severity","description"],"type":"object","properties":{"description":{"type":"string","description":"A short description of the rule used to detect the alert."},"full_description":{"type":"string"},"help":{"type":["string","null"]},"help_uri":{"type":["string","null"],"description":"A link to the documentation for the rule used to detect the alert."},"id":{"type":"string","description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string"},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"tags":{"type":["array","null"],"items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"description":"generated_description","full_description":"generated_full_description","help":"generated_help","help_uri":"generated_help_uri","id":"generated_id","name":"generated_name","severity":"generated_severity","tags":["generated_tags"]}';
    /**
     * description: A short description of the rule used to detect the alert.
     * help_uri: A link to the documentation for the rule used to detect the alert.
     * id: A unique identifier for the rule used to detect the alert.
     * severity: The severity of the alert.
     * @param ?array<string> $tags
     */
    public function __construct(public string $description, public ?string $full_description, public ?string $help, public ?string $help_uri, public string $id, public ?string $name, public ?string $severity, public ?array $tags)
    {
    }
}
