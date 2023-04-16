<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryPreReceiveHook
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"enforcement":{"type":"string"},"configuration_url":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name_null","enforcement":"generated_enforcement_null","configuration_url":"generated_configuration_url_null"}';

    public function __construct(public ?int $id, public ?string $name, public ?string $enforcement, #[MapFrom('configuration_url')] public ?string $configurationUrl)
    {
    }
}
