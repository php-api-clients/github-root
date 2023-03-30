<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\AliasAbstract;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
abstract readonly class Abstractd40f0da1f52e16339644a5f8e59f6ea8
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body."}}}},"description":"The changes to the comment."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the comment.';
    public const SCHEMA_EXAMPLE_DATA = '{"body":{"from":"generated_from_null"}}';
    public function __construct(public ?Schema\WebhookIssueCommentEdited\Changes\Body $body)
    {
    }
}
