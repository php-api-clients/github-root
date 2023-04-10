<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstract67255bf86ba21600296dca3436090770
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string"},"state":{"type":"string"},"downloaded_at":{"type":["string","null"]},"message":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url_null","state":"generated_state_null","downloaded_at":"generated_downloaded_at_null","message":"generated_message_null"}';
    public function __construct(public ?string $url, public ?string $state, #[\EventSauce\ObjectHydrator\MapFrom('downloaded_at')] public ?string $downloadedAt, public ?string $message)
    {
    }
}
