<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\AliasAbstract;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
abstract readonly class Abstractd34f4f2e4fff1066aa7cd8f52cc7e7e7
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"allowed_port_privacy_settings":{"type":["array","null"],"items":{"type":"string"},"description":"The privacy settings a user can select from when forwarding a port."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"allowed_port_privacy_settings":["generated_allowed_port_privacy_settings_null"]}';
    /**
     * allowedPortPrivacySettings: The privacy settings a user can select from when forwarding a port.
     * @param ?array<string> $allowedPortPrivacySettings
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('allowed_port_privacy_settings')] public ?array $allowedPortPrivacySettings)
    {
    }
}
