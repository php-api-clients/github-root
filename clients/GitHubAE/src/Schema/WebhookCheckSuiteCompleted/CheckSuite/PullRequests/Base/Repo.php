<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Repo
{
    public const SCHEMA_JSON = '{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Repo Ref';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name","url":"generated_url"}';
    public function __construct(public int $id, public string $name, public string $url)
    {
    }
}
