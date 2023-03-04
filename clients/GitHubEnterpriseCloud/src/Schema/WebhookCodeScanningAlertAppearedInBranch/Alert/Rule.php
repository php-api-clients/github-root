<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Rule
{
    public const SCHEMA_JSON = '{"required":["id","severity","description"],"type":"object","properties":{"description":{"type":"string","description":"A short description of the rule used to detect the alert."},"id":{"type":"string","description":"A unique identifier for the rule used to detect the alert."},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"description":"generated_description","id":"generated_id","severity":"generated_severity"}';
    /**
     * A short description of the rule used to detect the alert.
     */
    public ?string $description;
    /**
     * A unique identifier for the rule used to detect the alert.
     */
    public ?string $id;
    /**
     * The severity of the alert.
     */
    public ?string $severity;
    public function __construct(string $description, string $id, string $severity)
    {
        $this->description = $description;
        $this->id = $id;
        $this->severity = $severity;
    }
}
