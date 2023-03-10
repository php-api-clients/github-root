<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Contributor
{
    public const SCHEMA_JSON = '{"title":"Contributor","required":["contributions","type"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"site_admin":{"type":"boolean"},"contributions":{"type":"integer"},"email":{"type":"string"},"name":{"type":"string"}},"description":"Contributor"}';
    public const SCHEMA_TITLE = 'Contributor';
    public const SCHEMA_DESCRIPTION = 'Contributor';
    public const SCHEMA_EXAMPLE_DATA = '{"login":"generated_login","id":13,"node_id":"generated_node_id","avatar_url":"generated_avatar_url","gravatar_id":"generated_gravatar_id","url":"generated_url","html_url":"generated_html_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","organizations_url":"generated_organizations_url","repos_url":"generated_repos_url","events_url":"generated_events_url","received_events_url":"generated_received_events_url","type":"generated_type","site_admin":false,"contributions":13,"email":"generated_email","name":"generated_name"}';
    public function __construct(public ?string $login, public ?int $id, public ?string $node_id, public ?string $avatar_url, public ?string $gravatar_id, public ?string $url, public ?string $html_url, public ?string $followers_url, public ?string $following_url, public ?string $gists_url, public ?string $starred_url, public ?string $subscriptions_url, public ?string $organizations_url, public ?string $repos_url, public ?string $events_url, public ?string $received_events_url, public string $type, public ?bool $site_admin, public int $contributions, public ?string $email, public ?string $name)
    {
    }
}
