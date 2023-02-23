<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestSimple;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["comments","commits","statuses","html","issue","review_comments","review_comment","self"],"type":"object","properties":{"comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"commits":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"statuses":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"issue":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"review_comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"review_comment":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"comments":{"href":"generated_href"},"commits":{"href":"generated_href"},"statuses":{"href":"generated_href"},"html":{"href":"generated_href"},"issue":{"href":"generated_href"},"review_comments":{"href":"generated_href"},"review_comment":{"href":"generated_href"},"self":{"href":"generated_href"}}';
    /**
     * Hypermedia Link
     */
    public ?Schema\Link $comments;
    /**
     * Hypermedia Link
     */
    public ?Schema\Link $commits;
    /**
     * Hypermedia Link
     */
    public ?Schema\Link $statuses;
    /**
     * Hypermedia Link
     */
    public ?Schema\Link $html;
    /**
     * Hypermedia Link
     */
    public ?Schema\Link $issue;
    /**
     * Hypermedia Link
     */
    public ?Schema\Link $review_comments;
    /**
     * Hypermedia Link
     */
    public ?Schema\Link $review_comment;
    /**
     * Hypermedia Link
     */
    public ?Schema\Link $self;
    public function __construct(Schema\Link $comments, Schema\Link $commits, Schema\Link $statuses, Schema\Link $html, Schema\Link $issue, Schema\Link $review_comments, Schema\Link $review_comment, Schema\Link $self)
    {
        $this->comments = $comments;
        $this->commits = $commits;
        $this->statuses = $statuses;
        $this->html = $html;
        $this->issue = $issue;
        $this->review_comments = $review_comments;
        $this->review_comment = $review_comment;
        $this->self = $self;
    }
}
