<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Orgs\CreateWebhook\Request\ApplicationJson;

/**
 * @property string $url
 * @property ?string $contentType
 * @property ?string $secret
 * @property string|int|float|null $insecureSsl
 * @property ?string $username
 * @property ?string $password
 */
interface Config
{
}
