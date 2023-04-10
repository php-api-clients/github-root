<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\AuditLogEvent;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ActorLocation
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"country_name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"country_name":"generated_country_name_null"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('country_name')] public ?string $countryName)
    {
    }
}
