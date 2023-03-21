<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Pulls\DismissReview\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["message"],"type":"object","properties":{"message":{"type":"string","description":"The message for the pull request review dismissal"},"event":{"type":"string","examples":["\\"APPROVE\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message_null","event":"\\"APPROVE\\""}';
    /**
     * message: The message for the pull request review dismissal
     */
    public function __construct(public string $message, public ?string $event)
    {
    }
}
