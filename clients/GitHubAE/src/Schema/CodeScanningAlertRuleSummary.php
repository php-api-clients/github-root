<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class CodeScanningAlertRuleSummary
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":["string","null"],"description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string","description":"The name of the rule used to detect the alert."},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"description":{"type":"string","description":"A short description of the rule used to detect the alert."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":"generated_id","name":"generated_name","severity":"generated_severity","description":"generated_description"}';
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
    public function __construct(string $id, string $name, string $severity, string $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->severity = $severity;
        $this->description = $description;
    }
}
