<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class IssueEventDismissedReview
{
    public const SCHEMA_JSON = '{"title":"Issue Event Dismissed Review","required":["state","review_id","dismissal_message"],"type":"object","properties":{"state":{"type":"string"},"review_id":{"type":"integer"},"dismissal_message":{"type":["string","null"]},"dismissal_commit_id":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'Issue Event Dismissed Review';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"generated_state","review_id":13,"dismissal_message":"generated_dismissal_message","dismissal_commit_id":"generated_dismissal_commit_id"}';
    public ?string $state;
    public ?int $review_id;
    public ?string $dismissal_message;
    public ?string $dismissal_commit_id;
    public function __construct(string $state, int $review_id, string $dismissal_message, string $dismissal_commit_id)
    {
        $this->state = $state;
        $this->review_id = $review_id;
        $this->dismissal_message = $dismissal_message;
        $this->dismissal_commit_id = $dismissal_commit_id;
    }
}
