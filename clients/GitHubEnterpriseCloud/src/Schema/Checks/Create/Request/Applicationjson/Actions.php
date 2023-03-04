<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Checks\Create\Request\Applicationjson;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Actions
{
    public const SCHEMA_JSON = '{"required":["label","description","identifier"],"type":"object","properties":{"label":{"maxLength":20,"type":"string","description":"The text to be displayed on a button in the web UI. The maximum size is 20 characters."},"description":{"maxLength":40,"type":"string","description":"A short explanation of what this action would do. The maximum size is 40 characters."},"identifier":{"maxLength":20,"type":"string","description":"A reference for the action on the integrator\'s system. The maximum size is 20 characters."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"label":"generated_label","description":"generated_description","identifier":"generated_identifier"}';
    /**
     * The text to be displayed on a button in the web UI. The maximum size is 20 characters.
     */
    public ?string $label;
    /**
     * A short explanation of what this action would do. The maximum size is 40 characters.
     */
    public ?string $description;
    /**
     * A reference for the action on the integrator's system. The maximum size is 20 characters.
     */
    public ?string $identifier;
    public function __construct(string $label, string $description, string $identifier)
    {
        $this->label = $label;
        $this->description = $description;
        $this->identifier = $identifier;
    }
}
