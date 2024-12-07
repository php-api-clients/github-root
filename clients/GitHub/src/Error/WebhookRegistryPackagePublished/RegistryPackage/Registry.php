<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookRegistryPackagePublished\RegistryPackage;

final class Registry extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\Registry $error)
    {
    }
}
