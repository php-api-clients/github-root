<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Codespace;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class RuntimeConstraints
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"allowed_port_privacy_settings":{"type":["array","null"],"items":{"type":"string"},"description":"The privacy settings a user can select from when forwarding a port."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"allowed_port_privacy_settings":["generated_allowed_port_privacy_settings"]}';
    /**
     * allowed_port_privacy_settings: The privacy settings a user can select from when forwarding a port.
     * @param ?array<string> $allowed_port_privacy_settings
     */
    public function __construct(public ?array $allowed_port_privacy_settings)
    {
    }
}
