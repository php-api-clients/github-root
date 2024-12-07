<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ClassroomAcceptedAssignment implements \ApiClients\Client\GitHub\Contract\ClassroomAcceptedAssignment
{
    public const SCHEMA_JSON         = '{
    "title": "Classroom Accepted Assignment",
    "required": [
        "id",
        "submitted",
        "passing",
        "commit_count",
        "grade",
        "students",
        "repository",
        "assignment"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "Unique identifier of the repository.",
            "examples": [
                42
            ]
        },
        "submitted": {
            "type": "boolean",
            "description": "Whether an accepted assignment has been submitted.",
            "examples": [
                true
            ]
        },
        "passing": {
            "type": "boolean",
            "description": "Whether a submission passed.",
            "examples": [
                true
            ]
        },
        "commit_count": {
            "type": "integer",
            "description": "Count of student commits.",
            "examples": [
                5
            ]
        },
        "grade": {
            "type": "string",
            "description": "Most recent grade.",
            "examples": [
                "10\\/10"
            ]
        },
        "students": {
            "type": "array",
            "items": {
                "title": "Simple Classroom User",
                "required": [
                    "id",
                    "login",
                    "avatar_url",
                    "html_url"
                ],
                "type": "object",
                "properties": {
                    "id": {
                        "type": "integer",
                        "examples": [
                            1
                        ]
                    },
                    "login": {
                        "type": "string",
                        "examples": [
                            "octocat"
                        ]
                    },
                    "avatar_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"
                        ]
                    },
                    "html_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "https:\\/\\/github.com\\/octocat"
                        ]
                    }
                },
                "description": "A GitHub user simplified for Classroom."
            }
        },
        "repository": {
            "title": "Simple Classroom Repository",
            "required": [
                "id",
                "full_name",
                "html_url",
                "node_id",
                "private",
                "default_branch"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer",
                    "description": "A unique identifier of the repository.",
                    "examples": [
                        1296269
                    ]
                },
                "full_name": {
                    "type": "string",
                    "description": "The full, globally unique name of the repository.",
                    "examples": [
                        "octocat\\/Hello-World"
                    ]
                },
                "html_url": {
                    "type": "string",
                    "description": "The URL to view the repository on GitHub.com.",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/github.com\\/octocat\\/Hello-World"
                    ]
                },
                "node_id": {
                    "type": "string",
                    "description": "The GraphQL identifier of the repository.",
                    "examples": [
                        "MDEwOlJlcG9zaXRvcnkxMjk2MjY5"
                    ]
                },
                "private": {
                    "type": "boolean",
                    "description": "Whether the repository is private."
                },
                "default_branch": {
                    "type": "string",
                    "description": "The default branch for the repository.",
                    "examples": [
                        "main"
                    ]
                }
            },
            "description": "A GitHub repository view for Classroom"
        },
        "assignment": {
            "title": "Simple Classroom Assignment",
            "required": [
                "id",
                "public_repo",
                "title",
                "type",
                "invite_link",
                "invitations_enabled",
                "slug",
                "students_are_repo_admins",
                "feedback_pull_requests_enabled",
                "editor",
                "accepted",
                "submitted",
                "passing",
                "language",
                "deadline",
                "classroom"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer",
                    "description": "Unique identifier of the repository.",
                    "examples": [
                        42
                    ]
                },
                "public_repo": {
                    "type": "boolean",
                    "description": "Whether an accepted assignment creates a public repository.",
                    "examples": [
                        true
                    ]
                },
                "title": {
                    "type": "string",
                    "description": "Assignment title.",
                    "examples": [
                        "Intro to Binaries"
                    ]
                },
                "type": {
                    "enum": [
                        "individual",
                        "group"
                    ],
                    "type": "string",
                    "description": "Whether it\'s a Group Assignment or Individual Assignment.",
                    "examples": [
                        "individual"
                    ]
                },
                "invite_link": {
                    "type": "string",
                    "description": "The link that a student can use to accept the assignment.",
                    "examples": [
                        "https:\\/\\/classroom.github.com\\/a\\/Lx7jiUgx"
                    ]
                },
                "invitations_enabled": {
                    "type": "boolean",
                    "description": "Whether the invitation link is enabled. Visiting an enabled invitation link will accept the assignment.",
                    "examples": [
                        true
                    ]
                },
                "slug": {
                    "type": "string",
                    "description": "Sluggified name of the assignment.",
                    "examples": [
                        "intro-to-binaries"
                    ]
                },
                "students_are_repo_admins": {
                    "type": "boolean",
                    "description": "Whether students are admins on created repository on accepted assignment.",
                    "examples": [
                        true
                    ]
                },
                "feedback_pull_requests_enabled": {
                    "type": "boolean",
                    "description": "Whether feedback pull request will be created on assignment acceptance.",
                    "examples": [
                        true
                    ]
                },
                "max_teams": {
                    "type": [
                        "integer",
                        "null"
                    ],
                    "description": "The maximum allowable teams for the assignment.",
                    "examples": [
                        0
                    ]
                },
                "max_members": {
                    "type": [
                        "integer",
                        "null"
                    ],
                    "description": "The maximum allowable members per team.",
                    "examples": [
                        0
                    ]
                },
                "editor": {
                    "type": "string",
                    "description": "The selected editor for the assignment.",
                    "examples": [
                        "codespaces"
                    ]
                },
                "accepted": {
                    "type": "integer",
                    "description": "The number of students that have accepted the assignment.",
                    "examples": [
                        25
                    ]
                },
                "submitted": {
                    "type": "integer",
                    "description": "The number of students that have submitted the assignment.",
                    "examples": [
                        10
                    ]
                },
                "passing": {
                    "type": "integer",
                    "description": "The number of students that have passed the assignment.",
                    "examples": [
                        10
                    ]
                },
                "language": {
                    "type": "string",
                    "description": "The programming language used in the assignment.",
                    "examples": [
                        "elixir"
                    ]
                },
                "deadline": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The time at which the assignment is due.",
                    "format": "date-time",
                    "examples": [
                        "2011-01-26T19:06:43Z"
                    ]
                },
                "classroom": {
                    "title": "Simple Classroom",
                    "required": [
                        "id",
                        "name",
                        "archived",
                        "url"
                    ],
                    "type": "object",
                    "properties": {
                        "id": {
                            "type": "integer",
                            "description": "Unique identifier of the classroom.",
                            "examples": [
                                42
                            ]
                        },
                        "name": {
                            "type": "string",
                            "description": "The name of the classroom.",
                            "examples": [
                                "Programming Elixir"
                            ]
                        },
                        "archived": {
                            "type": "boolean",
                            "description": "Returns whether classroom is archived or not.",
                            "examples": [
                                false
                            ]
                        },
                        "url": {
                            "type": "string",
                            "description": "The url of the classroom on GitHub Classroom.",
                            "examples": [
                                "https:\\/\\/classroom.github.com\\/classrooms\\/1-programming-elixir"
                            ]
                        }
                    },
                    "description": "A GitHub Classroom classroom"
                }
            },
            "description": "A GitHub Classroom assignment"
        }
    },
    "description": "A GitHub Classroom accepted assignment"
}';
    public const SCHEMA_TITLE        = 'Classroom Accepted Assignment';
    public const SCHEMA_DESCRIPTION  = 'A GitHub Classroom accepted assignment';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "submitted": false,
    "passing": false,
    "commit_count": 12,
    "grade": "generated",
    "students": [
        {
            "id": 2,
            "login": "generated",
            "avatar_url": "https:\\/\\/example.com\\/",
            "html_url": "https:\\/\\/example.com\\/"
        },
        {
            "id": 2,
            "login": "generated",
            "avatar_url": "https:\\/\\/example.com\\/",
            "html_url": "https:\\/\\/example.com\\/"
        }
    ],
    "repository": {
        "id": 2,
        "full_name": "generated",
        "html_url": "https:\\/\\/example.com\\/",
        "node_id": "generated",
        "private": false,
        "default_branch": "generated"
    },
    "assignment": {
        "id": 2,
        "public_repo": false,
        "title": "generated",
        "type": "individual",
        "invite_link": "generated",
        "invitations_enabled": false,
        "slug": "generated",
        "students_are_repo_admins": false,
        "feedback_pull_requests_enabled": false,
        "max_teams": 9,
        "max_members": 11,
        "editor": "generated",
        "accepted": 8,
        "submitted": 9,
        "passing": 7,
        "language": "generated",
        "deadline": "1970-01-01T00:00:00+00:00",
        "classroom": {
            "id": 2,
            "name": "generated",
            "archived": false,
            "url": "generated"
        }
    }
}';

    /**
     * id: Unique identifier of the repository.
     * submitted: Whether an accepted assignment has been submitted.
     * passing: Whether a submission passed.
     * commitCount: Count of student commits.
     * grade: Most recent grade.
     * repository: A GitHub repository view for Classroom
     * assignment: A GitHub Classroom assignment
     */
    public function __construct(public int $id, public bool $submitted, public bool $passing, #[MapFrom('commit_count')]
    public int $commitCount, public string $grade, public array $students, public SimpleClassroomRepository $repository, public SimpleClassroomAssignment $assignment,)
    {
    }
}
