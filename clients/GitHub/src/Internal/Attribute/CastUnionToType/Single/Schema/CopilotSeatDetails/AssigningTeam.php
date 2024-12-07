<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\CopilotSeatDetails;

#[\Attribute(\Attribute::TARGET_PARAMETER)]
final class AssigningTeam implements \EventSauce\ObjectHydrator\PropertyCaster
{
    public function cast(mixed $value, \EventSauce\ObjectHydrator\ObjectMapper $hydrator) : mixed
    {
        if (\is_array($value)) {
            $signatureChunks = \array_unique(\array_keys($value));
            \sort($signatureChunks);
            $signature = \implode('|', $signatureChunks);
            if ($signature === 'description|html_url|id|members_url|name|node_id|notification_setting|parent|permission|permissions|privacy|repositories_url|slug|url') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\CopilotSeatDetails\AssigningTeam::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'created_at|group_id|html_url|id|members_url|name|slug|sync_to_organizations|updated_at|url') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\CopilotSeatDetails\AssigningTeam::class, $value);
                } catch (\Throwable) {
                }
            }
        }
        return $value;
    }
}
