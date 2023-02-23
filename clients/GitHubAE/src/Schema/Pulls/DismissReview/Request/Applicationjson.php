<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Pulls\DismissReview\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["message"],"type":"object","properties":{"message":{"type":"string","description":"The message for the pull request review dismissal"},"event":{"enum":["DISMISS"],"type":"string","examples":["\\"DISMISS\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message","event":"\\"DISMISS\\""}';
    /**
     * The message for the pull request review dismissal
     */
    public ?string $message;
    public string $event;
    public function __construct(string $message, string $event)
    {
        $this->message = $message;
        $this->event = $event;
    }
}
