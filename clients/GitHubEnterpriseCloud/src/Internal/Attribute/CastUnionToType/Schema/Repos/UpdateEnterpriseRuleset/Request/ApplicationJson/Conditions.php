<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Attribute\CastUnionToType\Schema\Repos\UpdateEnterpriseRuleset\Request\ApplicationJson;

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
final class Conditions implements PropertyCaster
{
    public function cast(mixed $value, ObjectMapper $hydrator): mixed
    {
        if (is_array($value)) {
            $signatureChunks = array_unique(array_keys($value));
            sort($signatureChunks);
            $signature = implode('|', $signatureChunks);
            if ($signature === 'organization_name') {
                try {
                    return $hydrator->hydrateObject(Schema\EnterpriseRulesetConditionsOrganizationNameTarget::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'organization_name') {
                try {
                    return $hydrator->hydrateObject(Schema\EnterpriseRulesetConditionsOrganizationNameTarget::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'organization_id') {
                try {
                    return $hydrator->hydrateObject(Schema\EnterpriseRulesetConditionsOrganizationIdTarget::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'organization_id') {
                try {
                    return $hydrator->hydrateObject(Schema\EnterpriseRulesetConditionsOrganizationIdTarget::class, $value);
                } catch (Throwable) {
                }
            }
        }

        return $value;
    }
}
