<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class GheStats
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
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
}';

    public function __construct(public Schema\ServerStatistics\GheStats\Comments|null $comments, public Schema\ServerStatistics\GheStats\Gists|null $gists, public Schema\ServerStatistics\GheStats\Hooks|null $hooks, public Schema\ServerStatistics\GheStats\Issues|null $issues, public Schema\ServerStatistics\GheStats\Milestones|null $milestones, public Schema\ServerStatistics\GheStats\Orgs|null $orgs, public Schema\ServerStatistics\GheStats\Pages|null $pages, public Schema\ServerStatistics\GheStats\Pulls|null $pulls, public Schema\ServerStatistics\GheStats\Repos|null $repos, public Schema\ServerStatistics\GheStats\Users|null $users)
    {
    }
}
