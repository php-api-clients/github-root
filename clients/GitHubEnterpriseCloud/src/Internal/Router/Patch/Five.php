<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Patch;

use ApiClients\Client\GitHubEnterpriseCloud\Internal\Routers;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GistComment;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GroupMapping;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Import;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\NetworkConfiguration;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationCustomRepositoryRole;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationRole;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrgHook;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrgMembership;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ProjectCard;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\TeamDiscussion;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\TeamFull;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Five
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Schema\NetworkConfiguration|Observable<Schema\CustomProperty>| */
    public function call(string $call, array $params, array $pathChunks): NetworkConfiguration|iterable|GistComment|OrganizationCustomRepositoryRole|OrgHook|OrganizationRole|WithoutBody|TeamFull|ProjectCard|Import|TeamDiscussion|GroupMapping|OrgMembership
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'network-configurations') {
                        if ($pathChunks[4] === '{network_configuration_id}') {
                            if ($call === 'PATCH /enterprises/{enterprise}/network-configurations/{network_configuration_id}') {
                                return $this->routers->internal🔀Router🔀Patch🔀HostedCompute()->updateNetworkConfigurationForEnterprise($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'properties') {
                        if ($pathChunks[4] === 'schema') {
                            if ($call === 'PATCH /enterprises/{enterprise}/properties/schema') {
                                return $this->routers->internal🔀Router🔀Patch🔀EnterpriseAdmin()->createOrUpdateEnterpriseCustomProperties($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($pathChunks[4] === '{comment_id}') {
                            if ($call === 'PATCH /gists/{gist_id}/comments/{comment_id}') {
                                return $this->routers->internal🔀Router🔀Patch🔀Gists()->updateComment($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'custom-repository-roles') {
                        if ($pathChunks[4] === '{role_id}') {
                            if ($call === 'PATCH /orgs/{org}/custom-repository-roles/{role_id}') {
                                return $this->routers->internal🔀Router🔀Patch🔀Orgs()->updateCustomRepoRole($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'custom_roles') {
                        if ($pathChunks[4] === '{role_id}') {
                            if ($call === 'PATCH /orgs/{org}/custom_roles/{role_id}') {
                                return $this->routers->internal🔀Router🔀Patch🔀Orgs()->updateCustomRole($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($call === 'PATCH /orgs/{org}/hooks/{hook_id}') {
                                return $this->routers->internal🔀Router🔀Patch🔀Orgs()->updateWebhook($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'organization-roles') {
                        if ($pathChunks[4] === '{role_id}') {
                            if ($call === 'PATCH /orgs/{org}/organization-roles/{role_id}') {
                                return $this->routers->internal🔀Router🔀Patch🔀Orgs()->patchCustomOrganizationRole($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'private-registries') {
                        if ($pathChunks[4] === '{secret_name}') {
                            if ($call === 'PATCH /orgs/{org}/private-registries/{secret_name}') {
                                return $this->routers->internal🔀Router🔀Patch🔀PrivateRegistries()->updateOrgPrivateRegistry($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'properties') {
                        if ($pathChunks[4] === 'schema') {
                            if ($call === 'PATCH /orgs/{org}/properties/schema') {
                                return $this->routers->internal🔀Router🔀Patch🔀Orgs()->createOrUpdateCustomProperties($params);
                            }
                        } elseif ($pathChunks[4] === 'values') {
                            if ($call === 'PATCH /orgs/{org}/properties/values') {
                                return $this->routers->internal🔀Router🔀Patch🔀Orgs()->createOrUpdateCustomPropertiesValuesForRepos($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($call === 'PATCH /orgs/{org}/teams/{team_slug}') {
                                return $this->routers->internal🔀Router🔀Patch🔀Teams()->updateInOrg($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === 'cards') {
                        if ($pathChunks[4] === '{card_id}') {
                            if ($call === 'PATCH /projects/columns/cards/{card_id}') {
                                return $this->routers->internal🔀Router🔀Patch🔀Projects()->updateCard($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'import') {
                            if ($call === 'PATCH /repos/{owner}/{repo}/import') {
                                return $this->routers->internal🔀Router🔀Patch🔀Migrations()->updateImport($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($pathChunks[4] === '{discussion_number}') {
                            if ($call === 'PATCH /teams/{team_id}/discussions/{discussion_number}') {
                                return $this->routers->internal🔀Router🔀Patch🔀Teams()->updateDiscussionLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'team-sync') {
                        if ($pathChunks[4] === 'group-mappings') {
                            if ($call === 'PATCH /teams/{team_id}/team-sync/group-mappings') {
                                return $this->routers->internal🔀Router🔀Patch🔀Teams()->createOrUpdateIdpGroupConnectionsLegacy($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'memberships') {
                    if ($pathChunks[3] === 'orgs') {
                        if ($pathChunks[4] === '{org}') {
                            if ($call === 'PATCH /user/memberships/orgs/{org}') {
                                return $this->routers->internal🔀Router🔀Patch🔀Orgs()->updateMembershipForAuthenticatedUser($params);
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
