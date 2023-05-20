<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Customer
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"name":{"type":"string"},"email":{"type":"string"},"uuid":{"type":"string"},"secret_key_data":{"type":"string"},"public_key_data":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated","email":"generated","uuid":"generated","secret_key_data":"generated","public_key_data":"generated"}';

    public function __construct(public ?string $name, public ?string $email, public ?string $uuid, #[MapFrom('secret_key_data')] public ?string $secretKeyData, #[MapFrom('public_key_data')] public ?string $publicKeyData)
    {
    }
}
