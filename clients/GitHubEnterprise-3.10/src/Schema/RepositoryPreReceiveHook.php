<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryPreReceiveHook
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"enforcement":{"type":"string"},"configuration_url":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":2,"name":"generated","enforcement":"generated","configuration_url":"generated"}';

    public function __construct(public int|null $id, public string|null $name, public string|null $enforcement, #[MapFrom('configuration_url')]
    public string|null $configurationUrl,)
    {
    }
}
