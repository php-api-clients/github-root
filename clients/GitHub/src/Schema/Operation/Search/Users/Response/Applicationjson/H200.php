<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operation\Search\Users\Response\Applicationjson;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","incomplete_results","items"],"type":"object","properties":{"total_count":{"type":"integer"},"incomplete_results":{"type":"boolean"},"items":{"type":"array","items":{"title":"User Search Result Item","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url","score"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"score":{"type":"number"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"events_url":{"type":"string"},"public_repos":{"type":"integer"},"public_gists":{"type":"integer"},"followers":{"type":"integer"},"following":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"name":{"type":["string","null"]},"bio":{"type":["string","null"]},"email":{"type":["string","null"],"format":"email"},"location":{"type":["string","null"]},"site_admin":{"type":"boolean"},"hireable":{"type":["boolean","null"]},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}},"blog":{"type":["string","null"]},"company":{"type":["string","null"]},"suspended_at":{"type":["string","null"],"format":"date-time"}},"description":"User Search Result Item"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"incomplete_results":false,"items":[{"login":"generated_login","id":13,"node_id":"generated_node_id","avatar_url":"generated_avatar_url","gravatar_id":"generated_gravatar_id","url":"generated_url","html_url":"generated_html_url","followers_url":"generated_followers_url","subscriptions_url":"generated_subscriptions_url","organizations_url":"generated_organizations_url","repos_url":"generated_repos_url","received_events_url":"generated_received_events_url","type":"generated_type","score":13,"following_url":"generated_following_url","gists_url":"generated_gists_url","starred_url":"generated_starred_url","events_url":"generated_events_url","public_repos":13,"public_gists":13,"followers":13,"following":13,"created_at":"generated_created_at","updated_at":"generated_updated_at","name":"generated_name","bio":"generated_bio","email":"generated_email","location":"generated_location","site_admin":false,"hireable":false,"text_matches":[{"object_url":"generated_object_url","object_type":"generated_object_type","property":"generated_property","fragment":"generated_fragment","matches":[{"text":"generated_text","indices":[13]}]}],"blog":"generated_blog","company":"generated_company","suspended_at":"generated_suspended_at"}]}';
    /**
     * @param array<\ApiClients\Client\GitHub\Schema\UserSearchResultItem> $items
     */
    public function __construct(public int $total_count, public bool $incomplete_results, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\UserSearchResultItem::class)] public array $items)
    {
    }
}
