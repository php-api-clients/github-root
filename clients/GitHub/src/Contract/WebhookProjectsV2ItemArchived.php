<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $action
 * @property \ApiClients\Client\GitHub\Schema\WebhooksProjectChanges $changes
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleInstallation $installation
 * @property \ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks $organization
 * @property \ApiClients\Client\GitHub\Schema\ProjectsV2Item $projectsVTwoItem
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $sender
 */
interface WebhookProjectsV2ItemArchived
{
}
