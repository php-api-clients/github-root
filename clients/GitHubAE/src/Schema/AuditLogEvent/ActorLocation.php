<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\AuditLogEvent;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
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
