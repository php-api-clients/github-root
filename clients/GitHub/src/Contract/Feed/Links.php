<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\Feed;

/**
 * @property \ApiClients\Client\GitHub\Schema\LinkWithType $timeline
 * @property \ApiClients\Client\GitHub\Schema\LinkWithType $user
 * @property ?\ApiClients\Client\GitHub\Schema\LinkWithType $securityAdvisories
 * @property ?\ApiClients\Client\GitHub\Schema\LinkWithType $currentUser
 * @property ?\ApiClients\Client\GitHub\Schema\LinkWithType $currentUserPublic
 * @property ?\ApiClients\Client\GitHub\Schema\LinkWithType $currentUserActor
 * @property ?\ApiClients\Client\GitHub\Schema\LinkWithType $currentUserOrganization
 * @property ?array $currentUserOrganizations
 * @property ?\ApiClients\Client\GitHub\Schema\LinkWithType $repositoryDiscussions
 * @property ?\ApiClients\Client\GitHub\Schema\LinkWithType $repositoryDiscussionsCategory
 */
interface Links
{
}
