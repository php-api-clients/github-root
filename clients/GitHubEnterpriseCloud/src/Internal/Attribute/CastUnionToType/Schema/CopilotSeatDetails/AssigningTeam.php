<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Attribute\CastUnionToType\Schema\CopilotSeatDetails;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
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
final class AssigningTeam implements PropertyCaster
{
    public function cast(mixed $value, ObjectMapper $hydrator): mixed
    {
        if (is_array($value)) {
            $signatureChunks = array_unique(array_keys($value));
            sort($signatureChunks);
            $signature = implode('|', $signatureChunks);
            if ($signature === 'description|html_url|id|members_url|name|node_id|notification_setting|parent|permission|permissions|privacy|repositories_url|slug|url') {
                try {
                    return $hydrator->hydrateObject(Schema\Team::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'created_at|group_id|group_name|html_url|id|members_url|name|slug|sync_to_organizations|updated_at|url') {
                try {
                    return $hydrator->hydrateObject(Schema\EnterpriseTeam::class, $value);
                } catch (Throwable) {
                }
            }
        }

        return $value;
    }
}
