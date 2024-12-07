<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Feed;

use ApiClients\Client\GitHub\Schema\LinkWithType;

/**
 * @property LinkWithType $timeline
 * @property LinkWithType $user
 * @property ?LinkWithType $securityAdvisories
 * @property ?LinkWithType $currentUser
 * @property ?LinkWithType $currentUserPublic
 * @property ?LinkWithType $currentUserActor
 * @property ?LinkWithType $currentUserOrganization
 * @property ?array $currentUserOrganizations
 * @property ?LinkWithType $repositoryDiscussions
 * @property ?LinkWithType $repositoryDiscussionsCategory
 */
interface Links
{
}
