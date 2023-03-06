<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Checks\Create\Request\Applicationjson;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Actions
{
    public const SCHEMA_JSON = '{"required":["label","description","identifier"],"type":"object","properties":{"label":{"maxLength":20,"type":"string","description":"The text to be displayed on a button in the web UI. The maximum size is 20 characters."},"description":{"maxLength":40,"type":"string","description":"A short explanation of what this action would do. The maximum size is 40 characters."},"identifier":{"maxLength":20,"type":"string","description":"A reference for the action on the integrator\'s system. The maximum size is 20 characters."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"label":"generated_label","description":"generated_description","identifier":"generated_identifier"}';
    /**
     * label: The text to be displayed on a button in the web UI. The maximum size is 20 characters.
     * description: A short explanation of what this action would do. The maximum size is 40 characters.
     * identifier: A reference for the action on the integrator's system. The maximum size is 20 characters.
     */
    public function __construct(public ?string $label, public ?string $description, public ?string $identifier)
    {
    }
}
