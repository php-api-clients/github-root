<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error;

final class WebhookMarketplacePurchasePendingChangeCancelled extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookMarketplacePurchasePendingChangeCancelled $error)
    {
    }
}
