<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookMemberEdited\Changes;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class OldPermission
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous permissions of the collaborator if the action was edited."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated_from"}';
    /**
     * The previous permissions of the collaborator if the action was edited.
     */
    public ?string $from;
    public function __construct(string $from)
    {
        $this->from = $from;
    }
}
