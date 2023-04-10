<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class RepositoryPreReceiveHook
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"enforcement":{"type":"string"},"configuration_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name_null","enforcement":"generated_enforcement_null","configuration_url":"generated_configuration_url_null"}';
    public function __construct(public ?int $id, public ?string $name, public ?string $enforcement, #[\EventSauce\ObjectHydrator\MapFrom('configuration_url')] public ?string $configurationUrl)
    {
    }
}
