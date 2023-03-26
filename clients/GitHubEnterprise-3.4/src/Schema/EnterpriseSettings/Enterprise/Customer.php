<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Customer
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string"},"email":{"type":"string"},"uuid":{"type":"string"},"secret_key_data":{"type":"string"},"public_key_data":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","email":"generated_email_null","uuid":"generated_uuid_null","secret_key_data":"generated_secret_key_data_null","public_key_data":"generated_public_key_data_null"}';
    public function __construct(public ?string $name, public ?string $email, public ?string $uuid, #[\EventSauce\ObjectHydrator\MapFrom('secret_key_data')] public ?string $secretKeyData, #[\EventSauce\ObjectHydrator\MapFrom('public_key_data')] public ?string $publicKeyData)
    {
    }
}
