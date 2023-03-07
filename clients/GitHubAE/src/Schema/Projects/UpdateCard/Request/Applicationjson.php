<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Projects\UpdateCard\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"note":{"type":["string","null"],"description":"The project card\'s note","examples":["Update all gems"]},"archived":{"type":"boolean","description":"Whether or not the card is archived","examples":[false]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"note":"Update all gems","archived":false}';
    /**
     * note: The project card's note
     * archived: Whether or not the card is archived
     */
    public function __construct(public ?string $note, public ?bool $archived)
    {
    }
}
