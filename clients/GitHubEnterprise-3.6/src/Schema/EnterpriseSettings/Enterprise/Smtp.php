<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Smtp
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean"},"address":{"type":"string"},"authentication":{"type":"string"},"port":{"type":"string"},"domain":{"type":"string"},"username":{"type":"string"},"user_name":{"type":"string"},"enable_starttls_auto":{"type":"boolean"},"password":{"type":"string"},"discard-to-noreply-address":{"type":"boolean"},"support_address":{"type":"string"},"support_address_type":{"type":"string"},"noreply_address":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":false,"address":"generated_address_null","authentication":"generated_authentication_null","port":"generated_port_null","domain":"generated_domain_null","username":"generated_username_null","user_name":"generated_user_name_null","enable_starttls_auto":false,"password":"generated_password_null","discard_MINUS_to_MINUS_noreply_MINUS_address":false,"support_address":"generated_support_address_null","support_address_type":"generated_support_address_type_null","noreply_address":"generated_noreply_address_null"}';
    public function __construct(public ?bool $enabled, public ?string $address, public ?string $authentication, public ?string $port, public ?string $domain, public ?string $username, #[\EventSauce\ObjectHydrator\MapFrom('user_name')] public ?string $userName, #[\EventSauce\ObjectHydrator\MapFrom('enable_starttls_auto')] public ?bool $enableStarttlsAuto, public ?string $password, #[\EventSauce\ObjectHydrator\MapFrom('discard_MINUS_to_MINUS_noreply_MINUS_address')] public ?bool $discardMinusToMinusNoreplyMinusAddress, #[\EventSauce\ObjectHydrator\MapFrom('support_address')] public ?string $supportAddress, #[\EventSauce\ObjectHydrator\MapFrom('support_address_type')] public ?string $supportAddressType, #[\EventSauce\ObjectHydrator\MapFrom('noreply_address')] public ?string $noreplyAddress)
    {
    }
}
