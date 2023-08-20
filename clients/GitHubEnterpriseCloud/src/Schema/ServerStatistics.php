<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ServerStatistics
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "server_id": {
            "type": "string"
        },
        "collection_date": {
            "type": "string"
        },
        "schema_version": {
            "type": "string"
        },
        "ghes_version": {
            "type": "string"
        },
        "host_name": {
            "type": "string"
        },
        "github_connect": {
            "type": "object",
            "properties": {
                "features_enabled": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    }
                }
            }
        },
        "ghe_stats": {
            "type": "object",
            "properties": {
                "comments": {
                    "type": "object",
                    "properties": {
                        "total_commit_comments": {
                            "type": "integer"
                        },
                        "total_gist_comments": {
                            "type": "integer"
                        },
                        "total_issue_comments": {
                            "type": "integer"
                        },
                        "total_pull_request_comments": {
                            "type": "integer"
                        }
                    }
                },
                "gists": {
                    "type": "object",
                    "properties": {
                        "total_gists": {
                            "type": "integer"
                        },
                        "private_gists": {
                            "type": "integer"
                        },
                        "public_gists": {
                            "type": "integer"
                        }
                    }
                },
                "hooks": {
                    "type": "object",
                    "properties": {
                        "total_hooks": {
                            "type": "integer"
                        },
                        "active_hooks": {
                            "type": "integer"
                        },
                        "inactive_hooks": {
                            "type": "integer"
                        }
                    }
                },
                "issues": {
                    "type": "object",
                    "properties": {
                        "total_issues": {
                            "type": "integer"
                        },
                        "open_issues": {
                            "type": "integer"
                        },
                        "closed_issues": {
                            "type": "integer"
                        }
                    }
                },
                "milestones": {
                    "type": "object",
                    "properties": {
                        "total_milestones": {
                            "type": "integer"
                        },
                        "open_milestones": {
                            "type": "integer"
                        },
                        "closed_milestones": {
                            "type": "integer"
                        }
                    }
                },
                "orgs": {
                    "type": "object",
                    "properties": {
                        "total_orgs": {
                            "type": "integer"
                        },
                        "disabled_orgs": {
                            "type": "integer"
                        },
                        "total_teams": {
                            "type": "integer"
                        },
                        "total_team_members": {
                            "type": "integer"
                        }
                    }
                },
                "pages": {
                    "type": "object",
                    "properties": {
                        "total_pages": {
                            "type": "integer"
                        }
                    }
                },
                "pulls": {
                    "type": "object",
                    "properties": {
                        "total_pulls": {
                            "type": "integer"
                        },
                        "merged_pulls": {
                            "type": "integer"
                        },
                        "mergeable_pulls": {
                            "type": "integer"
                        },
                        "unmergeable_pulls": {
                            "type": "integer"
                        }
                    }
                },
                "repos": {
                    "type": "object",
                    "properties": {
                        "total_repos": {
                            "type": "integer"
                        },
                        "root_repos": {
                            "type": "integer"
                        },
                        "fork_repos": {
                            "type": "integer"
                        },
                        "org_repos": {
                            "type": "integer"
                        },
                        "total_pushes": {
                            "type": "integer"
                        },
                        "total_wikis": {
                            "type": "integer"
                        }
                    }
                },
                "users": {
                    "type": "object",
                    "properties": {
                        "total_users": {
                            "type": "integer"
                        },
                        "admin_users": {
                            "type": "integer"
                        },
                        "suspended_users": {
                            "type": "integer"
                        }
                    }
                }
            }
        },
        "dormant_users": {
            "type": "object",
            "properties": {
                "total_dormant_users": {
                    "type": "integer"
                },
                "dormancy_threshold": {
                    "type": "string"
                }
            }
        },
        "actions_stats": {
            "type": "object",
            "properties": {
                "number_of_repos_using_actions": {
                    "type": "integer",
                    "description": "The total number of repositories in a GHES installation that have Actions enabled"
                },
                "percentage_of_repos_using_actions": {
                    "type": "string",
                    "description": "The percentage of repositories in a GHES installation that have Actions enabled"
                }
            },
            "description": "Actions metrics that are included in the Server Statistics payload\\/export from GHES"
        },
        "packages_stats": {
            "type": "object",
            "properties": {
                "registry_enabled": {
                    "type": "boolean",
                    "description": "Whether GitHub Packages is enabled globally in a GHES installation"
                },
                "registry_v2_enabled": {
                    "type": "boolean",
                    "description": "Whether a beta registry is enabled in a GHES installation"
                },
                "ecosystems": {
                    "type": "array",
                    "items": {
                        "type": "object",
                        "properties": {
                            "name": {
                                "enum": [
                                    "npm",
                                    "maven",
                                    "docker",
                                    "nuget",
                                    "rubygems",
                                    "containers"
                                ],
                                "type": "string",
                                "description": "The name of the package ecosystem"
                            },
                            "enabled": {
                                "enum": [
                                    "TRUE",
                                    "FALSE",
                                    "READONLY"
                                ],
                                "type": "string",
                                "description": "Shows if a package system is enabled, disabled, or read-only in a GHES installation"
                            },
                            "published_packages_count": {
                                "type": "integer",
                                "description": "The total number of published packages in a package ecosystem in a GHES installation"
                            },
                            "private_packages_count": {
                                "type": "integer",
                                "description": "The total number of private packages in a package ecosystem in a GHES installation"
                            },
                            "public_packages_count": {
                                "type": "integer",
                                "description": "The total number of public packages in a package ecosystem in a GHES installation"
                            },
                            "internal_packages_count": {
                                "type": "integer",
                                "description": "The total number of internal packages in a package ecosystem in a GHES installation"
                            },
                            "user_packages_count": {
                                "type": "integer",
                                "description": "The total number of user packages in a package ecosystem in a GHES installation"
                            },
                            "organization_packages_count": {
                                "type": "integer",
                                "description": "The total number of organization packages in a package ecosystem in a GHES installation"
                            },
                            "daily_download_count": {
                                "type": "integer",
                                "description": "The total number of packages in an ecosystem that have been downloaded in the 24 hours prior to `collection_date` for a GHES installation"
                            },
                            "daily_update_count": {
                                "type": "integer",
                                "description": "The total number of packages in an ecosystem that have been updated in the 24 hours prior to `collection_date` for a GHES installation"
                            },
                            "daily_delete_count": {
                                "type": "integer",
                                "description": "The total number of packages in an ecosystem that have been deleted in the 24 hours prior to `collection_date` for a GHES installation"
                            },
                            "daily_create_count": {
                                "type": "integer",
                                "description": "The total number of packages in an ecosystem that have been created in the 24 hours prior to `collection_date` for a GHES installation"
                            }
                        }
                    },
                    "description": "The details of the package ecosystems that are enabled in a GHES installation"
                }
            },
            "description": "Packages metrics that are included in the Server Statistics payload\\/export from GHES"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "server_id": "generated",
    "collection_date": "generated",
    "schema_version": "generated",
    "ghes_version": "generated",
    "host_name": "generated",
    "github_connect": {
        "features_enabled": [
            "generated",
            "generated"
        ]
    },
    "ghe_stats": {
        "comments": {
            "total_commit_comments": 21,
            "total_gist_comments": 19,
            "total_issue_comments": 20,
            "total_pull_request_comments": 27
        },
        "gists": {
            "total_gists": 11,
            "private_gists": 13,
            "public_gists": 12
        },
        "hooks": {
            "total_hooks": 11,
            "active_hooks": 12,
            "inactive_hooks": 14
        },
        "issues": {
            "total_issues": 12,
            "open_issues": 11,
            "closed_issues": 13
        },
        "milestones": {
            "total_milestones": 16,
            "open_milestones": 15,
            "closed_milestones": 17
        },
        "orgs": {
            "total_orgs": 10,
            "disabled_orgs": 13,
            "total_teams": 11,
            "total_team_members": 18
        },
        "pages": {
            "total_pages": 11
        },
        "pulls": {
            "total_pulls": 11,
            "merged_pulls": 12,
            "mergeable_pulls": 15,
            "unmergeable_pulls": 17
        },
        "repos": {
            "total_repos": 11,
            "root_repos": 10,
            "fork_repos": 10,
            "org_repos": 9,
            "total_pushes": 12,
            "total_wikis": 11
        },
        "users": {
            "total_users": 11,
            "admin_users": 11,
            "suspended_users": 15
        }
    },
    "dormant_users": {
        "total_dormant_users": 19,
        "dormancy_threshold": "generated"
    },
    "actions_stats": {
        "number_of_repos_using_actions": 29,
        "percentage_of_repos_using_actions": "generated"
    },
    "packages_stats": {
        "registry_enabled": false,
        "registry_v2_enabled": false,
        "ecosystems": [
            {
                "name": "containers",
                "enabled": "TRUE",
                "published_packages_count": 24,
                "private_packages_count": 22,
                "public_packages_count": 21,
                "internal_packages_count": 23,
                "user_packages_count": 19,
                "organization_packages_count": 27,
                "daily_download_count": 20,
                "daily_update_count": 18,
                "daily_delete_count": 18,
                "daily_create_count": 18
            },
            {
                "name": "containers",
                "enabled": "TRUE",
                "published_packages_count": 24,
                "private_packages_count": 22,
                "public_packages_count": 21,
                "internal_packages_count": 23,
                "user_packages_count": 19,
                "organization_packages_count": 27,
                "daily_download_count": 20,
                "daily_update_count": 18,
                "daily_delete_count": 18,
                "daily_create_count": 18
            }
        ]
    }
}';

    /**
     * actionsStats: Actions metrics that are included in the Server Statistics payload/export from GHES
     * packagesStats: Packages metrics that are included in the Server Statistics payload/export from GHES
     */
    public function __construct(#[MapFrom('server_id')]
    public string|null $serverId, #[MapFrom('collection_date')]
    public string|null $collectionDate, #[MapFrom('schema_version')]
    public string|null $schemaVersion, #[MapFrom('ghes_version')]
    public string|null $ghesVersion, #[MapFrom('host_name')]
    public string|null $hostName, #[MapFrom('github_connect')]
    public Schema\ServerStatistics\GithubConnect|null $githubConnect, #[MapFrom('ghe_stats')]
    public Schema\ServerStatistics\GheStats|null $gheStats, #[MapFrom('dormant_users')]
    public Schema\ServerStatistics\DormantUsers|null $dormantUsers, #[MapFrom('actions_stats')]
    public Schema\ServerStatisticsActions|null $actionsStats, #[MapFrom('packages_stats')]
    public Schema\ServerStatisticsPackages|null $packagesStats,)
    {
    }
}
