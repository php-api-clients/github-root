<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\Repos\UpdateWebhook\Request;

/**
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookConfig $config
 * @property ?array $events
 * @property ?array $addEvents
 * @property ?array $removeEvents
 * @property ?bool $active
 */
interface ApplicationJson
{
}
