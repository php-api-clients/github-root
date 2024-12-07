<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Repos\CreateWebhook\Request\ApplicationJson;

/**
 * @property ?string $url
 * @property ?string $contentType
 * @property ?string $secret
 * @property string|int|float|null $insecureSsl
 */
interface Config
{
}
