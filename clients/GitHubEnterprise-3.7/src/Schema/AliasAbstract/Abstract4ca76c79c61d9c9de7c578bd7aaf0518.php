<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstract4ca76c79c61d9c9de7c578bd7aaf0518
{
    public const SCHEMA_JSON = '{"required":["authorized_key"],"type":"object","properties":{"authorized_key":{"type":"string","description":"The public SSH key."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"authorized_key":"generated_authorized_key_null"}';
    /**
     * authorizedKey: The public SSH key.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('authorized_key')] public string $authorizedKey)
    {
    }
}
