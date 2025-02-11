<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Attribute\CastUnionToType\Schema\EnterpriseAdmin\CreateAuditLogStream\Request\ApplicationJson;

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
final class VendorSpecific implements PropertyCaster
{
    public function cast(mixed $value, ObjectMapper $hydrator): mixed
    {
        if (is_array($value)) {
            $signatureChunks = array_unique(array_keys($value));
            sort($signatureChunks);
            $signature = implode('|', $signatureChunks);
            if ($signature === 'encrypted_sas_url|key_id') {
                try {
                    return $hydrator->hydrateObject(Schema\AzureBlobConfig::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'encrypted_connstring|key_id|name') {
                try {
                    return $hydrator->hydrateObject(Schema\AzureHubConfig::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'arn_role|authentication_type|bucket|key_id|region' && $value['authentication_type'] === 'oidc') {
                try {
                    return $hydrator->hydrateObject(Schema\AmazonS3OidcConfig::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'authentication_type|bucket|encrypted_access_key_id|encrypted_secret_key|key_id|region' && $value['authentication_type'] === 'access_keys') {
                try {
                    return $hydrator->hydrateObject(Schema\AmazonS3AccessKeysConfig::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'domain|encrypted_token|key_id|port|ssl_verify') {
                try {
                    return $hydrator->hydrateObject(Schema\SplunkConfig::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'domain|encrypted_token|key_id|path|port|ssl_verify') {
                try {
                    return $hydrator->hydrateObject(Schema\HecConfig::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'bucket|encrypted_json_credentials|key_id') {
                try {
                    return $hydrator->hydrateObject(Schema\GoogleCloudConfig::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'encrypted_token|key_id|site' && ($value['site'] === 'US' || $value['site'] === 'US3' || $value['site'] === 'US5' || $value['site'] === 'EU1' || $value['site'] === 'US1-FED' || $value['site'] === 'AP1')) {
                try {
                    return $hydrator->hydrateObject(Schema\DatadogConfig::class, $value);
                } catch (Throwable) {
                }
            }
        }

        return $value;
    }
}
