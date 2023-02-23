<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookCheckRunRequestedAction;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class RequestedAction
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"identifier":{"type":"string","description":"The integrator reference of the action requested by the user."}},"description":"The action requested by the user."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The action requested by the user.';
    public const SCHEMA_EXAMPLE_DATA = '{"identifier":"generated_identifier"}';
    /**
     * The integrator reference of the action requested by the user.
     */
    public ?string $identifier;
    public function __construct(string $identifier)
    {
        $this->identifier = $identifier;
    }
}
