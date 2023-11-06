<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Post;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\AuthenticationToken;
use ApiClients\Client\GitHubEnterprise\Schema\CodeScanningSarifsReceipt;
use ApiClients\Client\GitHubEnterprise\Schema\GitCommit;
use ApiClients\Client\GitHubEnterprise\Schema\GitRef;
use ApiClients\Client\GitHubEnterprise\Schema\GitTag;
use ApiClients\Client\GitHubEnterprise\Schema\GitTree;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\SyncLdapMappingForTeam\Response\ApplicationJson\Created;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\SyncLdapMappingForUser\Response\ApplicationJson\Created\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\PageBuildStatus;
use ApiClients\Client\GitHubEnterprise\Schema\Reaction;
use ApiClients\Client\GitHubEnterprise\Schema\ReleaseNotesContent;
use ApiClients\Client\GitHubEnterprise\Schema\ShortBlob;
use ApiClients\Client\GitHubEnterprise\Schema\Status;
use ApiClients\Client\GitHubEnterprise\Schema\TagProtection;
use ApiClients\Client\GitHubEnterprise\Schema\TeamDiscussion;
use ApiClients\Client\GitHubEnterprise\Schema\TeamDiscussionComment;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Six
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): Created|Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|AuthenticationToken|WithoutBody|TeamDiscussion|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Created\Application\Json|CodeScanningSarifsReceipt|ShortBlob|GitCommit|GitRef|GitTag|GitTree|PageBuildStatus|ReleaseNotesContent|Status|TagProtection|TeamDiscussionComment|Reaction
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'ldap') {
                    if ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_id}') {
                            if ($pathChunks[5] === 'sync') {
                                if ($call === 'POST /admin/ldap/teams/{team_id}/sync') {
                                    return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->syncLdapMappingForTeam($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'users') {
                        if ($pathChunks[4] === '{username}') {
                            if ($pathChunks[5] === 'sync') {
                                if ($call === 'POST /admin/ldap/users/{username}/sync') {
                                    return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->syncLdapMappingForUser($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'hook') {
                    if ($pathChunks[3] === 'deliveries') {
                        if ($pathChunks[4] === '{delivery_id}') {
                            if ($pathChunks[5] === 'attempts') {
                                if ($call === 'POST /app/hook/deliveries/{delivery_id}/attempts') {
                                    return $this->routers->internal🔀Router🔀Post🔀Apps()->redeliverWebhookDelivery($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === 'registration-token') {
                                if ($call === 'POST /enterprises/{enterprise}/actions/runners/registration-token') {
                                    return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->createRegistrationTokenForEnterprise($params);
                                }
                            } elseif ($pathChunks[5] === 'remove-token') {
                                if ($call === 'POST /enterprises/{enterprise}/actions/runners/remove-token') {
                                    return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->createRemoveTokenForEnterprise($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === 'registration-token') {
                                if ($call === 'POST /orgs/{org}/actions/runners/registration-token') {
                                    return $this->routers->internal🔀Router🔀Post🔀Actions()->createRegistrationTokenForOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'remove-token') {
                                if ($call === 'POST /orgs/{org}/actions/runners/remove-token') {
                                    return $this->routers->internal🔀Router🔀Post🔀Actions()->createRemoveTokenForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($pathChunks[5] === 'pings') {
                                if ($call === 'POST /orgs/{org}/hooks/{hook_id}/pings') {
                                    return $this->routers->internal🔀Router🔀Post🔀Orgs()->pingWebhook($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($call === 'POST /orgs/{org}/teams/{team_slug}/discussions') {
                                    return $this->routers->internal🔀Router🔀Post🔀Teams()->createDiscussionInOrg($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === 'cards') {
                        if ($pathChunks[4] === '{card_id}') {
                            if ($pathChunks[5] === 'moves') {
                                if ($call === 'POST /projects/columns/cards/{card_id}/moves') {
                                    return $this->routers->internal🔀Router🔀Post🔀Projects()->moveCard($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'sarifs') {
                                if ($call === 'POST /repos/{owner}/{repo}/code-scanning/sarifs') {
                                    return $this->routers->internal🔀Router🔀Post🔀CodeScanning()->uploadSarif($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'git') {
                            if ($pathChunks[5] === 'blobs') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/blobs') {
                                    return $this->routers->internal🔀Router🔀Post🔀Git()->createBlob($params);
                                }
                            } elseif ($pathChunks[5] === 'commits') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/commits') {
                                    return $this->routers->internal🔀Router🔀Post🔀Git()->createCommit($params);
                                }
                            } elseif ($pathChunks[5] === 'refs') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/refs') {
                                    return $this->routers->internal🔀Router🔀Post🔀Git()->createRef($params);
                                }
                            } elseif ($pathChunks[5] === 'tags') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/tags') {
                                    return $this->routers->internal🔀Router🔀Post🔀Git()->createTag($params);
                                }
                            } elseif ($pathChunks[5] === 'trees') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/trees') {
                                    return $this->routers->internal🔀Router🔀Post🔀Git()->createTree($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($pathChunks[5] === 'builds') {
                                if ($call === 'POST /repos/{owner}/{repo}/pages/builds') {
                                    return $this->routers->internal🔀Router🔀Post🔀Repos()->requestPagesBuild($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === 'generate-notes') {
                                if ($call === 'POST /repos/{owner}/{repo}/releases/generate-notes') {
                                    return $this->routers->internal🔀Router🔀Post🔀Repos()->generateReleaseNotes($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'statuses') {
                            if ($pathChunks[5] === '{sha}') {
                                if ($call === 'POST /repos/{owner}/{repo}/statuses/{sha}') {
                                    return $this->routers->internal🔀Router🔀Post🔀Repos()->createCommitStatus($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'tags') {
                            if ($pathChunks[5] === 'protection') {
                                if ($call === 'POST /repos/{owner}/{repo}/tags/protection') {
                                    return $this->routers->internal🔀Router🔀Post🔀Repos()->createTagProtection($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($pathChunks[4] === '{discussion_number}') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'POST /teams/{team_id}/discussions/{discussion_number}/comments') {
                                    return $this->routers->internal🔀Router🔀Post🔀Teams()->createDiscussionCommentLegacy($params);
                                }
                            } elseif ($pathChunks[5] === 'reactions') {
                                if ($call === 'POST /teams/{team_id}/discussions/{discussion_number}/reactions') {
                                    return $this->routers->internal🔀Router🔀Post🔀Reactions()->createForTeamDiscussionLegacy($params);
                                }
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
