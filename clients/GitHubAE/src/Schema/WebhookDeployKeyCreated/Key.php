<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookDeployKeyCreated;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Key
{
    public const SCHEMA_JSON = '{"required":["id","key","url","title","verified","created_at","read_only"],"type":"object","properties":{"added_by":{"type":["string","null"]},"created_at":{"type":"string"},"id":{"type":"integer"},"key":{"type":"string"},"last_used":{"type":["string","null"]},"read_only":{"type":"boolean"},"title":{"type":"string"},"url":{"type":"string","format":"uri"},"verified":{"type":"boolean"}},"description":"The [`deploy key`](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/deployments#get-a-deploy-key) resource."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The [`deploy key`](https://docs.github.com/github-ae@latest/rest/reference/deployments#get-a-deploy-key) resource.';
    public const SCHEMA_EXAMPLE_DATA = '{"added_by":"generated_added_by","created_at":"generated_created_at","id":13,"key":"generated_key","last_used":"generated_last_used","read_only":false,"title":"generated_title","url":"generated_url","verified":false}';
    public function __construct(public ?string $added_by, public string $created_at, public int $id, public string $key, public ?string $last_used, public bool $read_only, public string $title, public string $url, public bool $verified)
    {
    }
}
