<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Smtp
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"enabled":{"type":"boolean"},"address":{"type":"string"},"authentication":{"type":"string"},"port":{"type":"string"},"domain":{"type":"string"},"username":{"type":"string"},"user_name":{"type":"string"},"enable_starttls_auto":{"type":"boolean"},"password":{"type":"string"},"discard-to-noreply-address":{"type":"boolean"},"support_address":{"type":"string"},"support_address_type":{"type":"string"},"noreply_address":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":false,"address":"generated","authentication":"generated","port":"generated","domain":"generated","username":"generated","user_name":"generated","enable_starttls_auto":false,"password":"generated","discard-to-noreply-address":false,"support_address":"generated","support_address_type":"generated","noreply_address":"generated"}';

    public function __construct(public ?bool $enabled, public ?string $address, public ?string $authentication, public ?string $port, public ?string $domain, public ?string $username, #[MapFrom('user_name')] public ?string $userName, #[MapFrom('enable_starttls_auto')] public ?bool $enableStarttlsAuto, public ?string $password, #[MapFrom('discard-to-noreply-address')] public ?bool $discardMinToMinNoreplyMinAddress, #[MapFrom('support_address')] public ?string $supportAddress, #[MapFrom('support_address_type')] public ?string $supportAddressType, #[MapFrom('noreply_address')] public ?string $noreplyAddress)
    {
    }
}
