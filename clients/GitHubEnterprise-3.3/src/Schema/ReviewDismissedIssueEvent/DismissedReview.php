<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\ReviewDismissedIssueEvent;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class DismissedReview
{
    public const SCHEMA_JSON = '{"required":["state","review_id","dismissal_message"],"type":"object","properties":{"state":{"type":"string"},"review_id":{"type":"integer"},"dismissal_message":{"type":["string","null"]},"dismissal_commit_id":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"generated_state","review_id":13,"dismissal_message":"generated_dismissal_message","dismissal_commit_id":"generated_dismissal_commit_id"}';
    public function __construct(public string $state, public int $review_id, public ?string $dismissal_message, public ?string $dismissal_commit_id)
    {
    }
}
