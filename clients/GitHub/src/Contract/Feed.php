<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Feed\Links;

/**
 * @property string $timelineUrl
 * @property string $userUrl
 * @property ?string $currentUserPublicUrl
 * @property ?string $currentUserUrl
 * @property ?string $currentUserActorUrl
 * @property ?string $currentUserOrganizationUrl
 * @property ?array $currentUserOrganizationUrls
 * @property ?string $securityAdvisoriesUrl
 * @property ?string $repositoryDiscussionsUrl
 * @property ?string $repositoryDiscussionsCategoryUrl
 * @property Links $links
 */
interface Feed
{
}
