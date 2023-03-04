<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookMilestoneEdited\Changes;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class DueOn
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the due date if the action was `edited`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated_from"}';
    /**
     * The previous version of the due date if the action was `edited`.
     */
    public ?string $from;
    public function __construct(string $from)
    {
        $this->from = $from;
    }
}
