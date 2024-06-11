<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Attribute\CastUnionToType\Schema\ExemptionRequest;

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
final class ExemptionRequestData implements PropertyCaster
{
    public function cast(mixed $value, ObjectMapper $hydrator): mixed
    {
        if (is_array($value)) {
            $signatureChunks = array_unique(array_keys($value));
            sort($signatureChunks);
            $signature = implode('|', $signatureChunks);
            if ($signature === 'data|type' && $value['type'] === 'push_ruleset_bypass') {
                try {
                    return $hydrator->hydrateObject(Schema\ExemptionRequestPushRulesetBypass::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'data|type' && $value['type'] === 'secret_scanning') {
                try {
                    return $hydrator->hydrateObject(Schema\ExemptionRequestSecretScanning::class, $value);
                } catch (Throwable) {
                }
            }
        }

        return $value;
    }
}
