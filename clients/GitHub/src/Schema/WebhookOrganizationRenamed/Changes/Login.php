<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookOrganizationRenamed\Changes;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Login
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated_from"}';
    public function __construct(public ?string $from)
    {
    }
}
