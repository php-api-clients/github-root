<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\AliasAbstract;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
abstract readonly class Abstracta5445a08e16d224f94859ebaf785c18a
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message_null","url":"generated_url_null"}';
    public function __construct(public ?string $message, public ?string $url)
    {
    }
}
