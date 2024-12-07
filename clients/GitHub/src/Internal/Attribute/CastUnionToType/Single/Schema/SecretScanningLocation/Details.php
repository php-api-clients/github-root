<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\SecretScanningLocation;

#[\Attribute(\Attribute::TARGET_PARAMETER)]
final class Details implements \EventSauce\ObjectHydrator\PropertyCaster
{
    public function cast(mixed $value, \EventSauce\ObjectHydrator\ObjectMapper $hydrator) : mixed
    {
        if (\is_array($value)) {
            $signatureChunks = \array_unique(\array_keys($value));
            \sort($signatureChunks);
            $signature = \implode('|', $signatureChunks);
            if ($signature === 'blob_sha|blob_url|commit_sha|commit_url|end_column|end_line|path|start_column|start_line') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\SecretScanningLocation\Details::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'blob_sha|commit_sha|commit_url|end_column|end_line|page_url|path|start_column|start_line') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\SecretScanningLocation\Details::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'issue_title_url') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\SecretScanningLocation\Details::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'issue_body_url') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\SecretScanningLocation\Details::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'issue_comment_url') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\SecretScanningLocation\Details::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'discussion_title_url') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\SecretScanningLocation\Details::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'discussion_body_url') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\SecretScanningLocation\Details::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'discussion_comment_url') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\SecretScanningLocation\Details::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'pull_request_title_url') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\SecretScanningLocation\Details::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'pull_request_body_url') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\SecretScanningLocation\Details::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'pull_request_comment_url') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\SecretScanningLocation\Details::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'pull_request_review_url') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\SecretScanningLocation\Details::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'pull_request_review_comment_url') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\SecretScanningLocation\Details::class, $value);
                } catch (\Throwable) {
                }
            }
        }
        return $value;
    }
}
