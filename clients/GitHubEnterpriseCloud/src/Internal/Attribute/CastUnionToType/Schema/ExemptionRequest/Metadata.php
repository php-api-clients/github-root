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
final class Metadata implements PropertyCaster
{
    public function cast(mixed $value, ObjectMapper $hydrator): mixed
    {
        if (is_array($value)) {
            $signatureChunks = array_unique(array_keys($value));
            sort($signatureChunks);
            $signature = implode('|', $signatureChunks);
            if ($signature === 'label|reason' && ($value['reason'] === 'fixed_later' || $value['reason'] === 'false_positive' || $value['reason'] === 'tests')) {
                try {
                    return $hydrator->hydrateObject(Schema\ExemptionRequestSecretScanningMetadata::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'alert_title|reason' && ($value['reason'] === 'fixed_later' || $value['reason'] === 'false_positive' || $value['reason'] === 'tests' || $value['reason'] === 'revoked')) {
                try {
                    return $hydrator->hydrateObject(Schema\DismissalRequestSecretScanningMetadata::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'alert_title|reason' && ($value['reason'] === 'false positive' || $value['reason'] === 'won\'t fix' || $value['reason'] === 'used in tests')) {
                try {
                    return $hydrator->hydrateObject(Schema\DismissalRequestCodeScanningMetadata::class, $value);
                } catch (Throwable) {
                }
            }
        }

        return $value;
    }
}
