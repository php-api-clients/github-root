<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\AliasAbstract\T840A0FDF\T2788886F\T3E288C76\T836AAE9A;

use Attribute;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertyCaster;
use Throwable;

use function array_keys;
use function array_unique;
use function implode;
use function is_array;
use function sort;

#[Attribute(Attribute::TARGET_PARAMETER)]
final class Reviewer implements PropertyCaster
{
    public function cast(mixed $value, ObjectMapper $hydrator): mixed
    {
        if (is_array($value)) {
            $signatureChunks = array_unique(array_keys($value));
            sort($signatureChunks);
            $signature = implode('|', $signatureChunks);
            if ($signature === 'avatar_url|email|events_url|followers_url|following_url|gists_url|gravatar_id|html_url|id|login|name|node_id|organizations_url|received_events_url|repos_url|site_admin|starred_at|starred_url|subscriptions_url|type|url|user_view_type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'description|html_url|id|members_url|name|node_id|notification_setting|parent|permission|permissions|privacy|repositories_url|slug|url') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }
        }

        return $value;
    }
}
