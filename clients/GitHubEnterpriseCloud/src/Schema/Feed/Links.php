<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Feed;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["timeline","user"],"type":"object","properties":{"timeline":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"user":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"security_advisories":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_public":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_actor":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_organization":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_organizations":{"type":"array","items":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}},"repository_discussions":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"repository_discussions_category":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"timeline":{"href":"generated_href","type":"generated_type"},"user":{"href":"generated_href","type":"generated_type"},"security_advisories":{"href":"generated_href","type":"generated_type"},"current_user":{"href":"generated_href","type":"generated_type"},"current_user_public":{"href":"generated_href","type":"generated_type"},"current_user_actor":{"href":"generated_href","type":"generated_type"},"current_user_organization":{"href":"generated_href","type":"generated_type"},"current_user_organizations":[null],"repository_discussions":{"href":"generated_href","type":"generated_type"},"repository_discussions_category":{"href":"generated_href","type":"generated_type"}}';
    /**
     * Hypermedia Link with Type
     */
    public ?Schema\LinkWithType $timeline;
    /**
     * Hypermedia Link with Type
     */
    public ?Schema\LinkWithType $user;
    /**
     * Hypermedia Link with Type
     */
    public Schema\LinkWithType $security_advisories;
    /**
     * Hypermedia Link with Type
     */
    public Schema\LinkWithType $current_user;
    /**
     * Hypermedia Link with Type
     */
    public Schema\LinkWithType $current_user_public;
    /**
     * Hypermedia Link with Type
     */
    public Schema\LinkWithType $current_user_actor;
    /**
     * Hypermedia Link with Type
     */
    public Schema\LinkWithType $current_user_organization;
    /**
     * @var array<Schema\LinkWithType>
     */
    public array $current_user_organizations;
    /**
     * Hypermedia Link with Type
     */
    public Schema\LinkWithType $repository_discussions;
    /**
     * Hypermedia Link with Type
     */
    public Schema\LinkWithType $repository_discussions_category;
    public function __construct(Schema\LinkWithType $timeline, Schema\LinkWithType $user, Schema\LinkWithType $security_advisories, Schema\LinkWithType $current_user, Schema\LinkWithType $current_user_public, Schema\LinkWithType $current_user_actor, Schema\LinkWithType $current_user_organization, array $current_user_organizations, Schema\LinkWithType $repository_discussions, Schema\LinkWithType $repository_discussions_category)
    {
        $this->timeline = $timeline;
        $this->user = $user;
        $this->security_advisories = $security_advisories;
        $this->current_user = $current_user;
        $this->current_user_public = $current_user_public;
        $this->current_user_actor = $current_user_actor;
        $this->current_user_organization = $current_user_organization;
        $this->current_user_organizations = $current_user_organizations;
        $this->repository_discussions = $repository_discussions;
        $this->repository_discussions_category = $repository_discussions_category;
    }
}
