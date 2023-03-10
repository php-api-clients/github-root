<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Projects\MoveCard\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["position"],"type":"object","properties":{"position":{"pattern":"^(?:top|bottom|after:\\\\d+)$","type":"string","description":"The position of the card in a column. Can be one of: `top`, `bottom`, or `after:<card_id>` to place after the specified card.","examples":["bottom"]},"column_id":{"type":"integer","description":"The unique identifier of the column the card should be moved to","examples":[42]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"position":"bottom","column_id":42}';
    /**
     * position: The position of the card in a column. Can be one of: `top`, `bottom`, or `after:<card_id>` to place after the specified card.
     * column_id: The unique identifier of the column the card should be moved to
     */
    public function __construct(public string $position, public ?int $column_id)
    {
    }
}
