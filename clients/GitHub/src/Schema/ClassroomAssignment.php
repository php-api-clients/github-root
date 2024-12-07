<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ClassroomAssignment implements \ApiClients\Client\GitHub\Contract\ClassroomAssignment
{
    public const SCHEMA_JSON         = '{
    "title": "Classroom Assignment",
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
        "max_teams",
        "max_members",
        "editor",
        "accepted",
        "submitted",
        "passing",
        "language",
        "deadline",
        "starter_code_repository",
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
            "description": "Whether it\'s a group assignment or individual assignment.",
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
            "description": "Whether students are admins on created repository when a student accepts the assignment.",
            "examples": [
                true
            ]
        },
        "feedback_pull_requests_enabled": {
            "type": "boolean",
            "description": "Whether feedback pull request will be created when a student accepts the assignment.",
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
        "starter_code_repository": {
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
        "classroom": {
            "title": "Classroom",
            "required": [
                "id",
                "name",
                "archived",
                "organization",
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
                    "description": "Whether classroom is archived.",
                    "examples": [
                        false
                    ]
                },
                "organization": {
                    "title": "Organization Simple for Classroom",
                    "required": [
                        "id",
                        "login",
                        "node_id",
                        "html_url",
                        "name",
                        "avatar_url"
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
                                "github"
                            ]
                        },
                        "node_id": {
                            "type": "string",
                            "examples": [
                                "MDEyOk9yZ2FuaXphdGlvbjE="
                            ]
                        },
                        "html_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/github.com\\/github"
                            ]
                        },
                        "name": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "examples": [
                                "Github - Code thigns happen here"
                            ]
                        },
                        "avatar_url": {
                            "type": "string",
                            "examples": [
                                "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"
                            ]
                        }
                    },
                    "description": "A GitHub organization."
                },
                "url": {
                    "type": "string",
                    "description": "The URL of the classroom on GitHub Classroom.",
                    "examples": [
                        "https:\\/\\/classroom.github.com\\/classrooms\\/1-programming-elixir"
                    ]
                }
            },
            "description": "A GitHub Classroom classroom"
        }
    },
    "description": "A GitHub Classroom assignment"
}';
    public const SCHEMA_TITLE        = 'Classroom Assignment';
    public const SCHEMA_DESCRIPTION  = 'A GitHub Classroom assignment';
    public const SCHEMA_EXAMPLE_DATA = '{
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
    "starter_code_repository": {
        "id": 2,
        "full_name": "generated",
        "html_url": "https:\\/\\/example.com\\/",
        "node_id": "generated",
        "private": false,
        "default_branch": "generated"
    },
    "classroom": {
        "id": 2,
        "name": "generated",
        "archived": false,
        "organization": {
            "id": 2,
            "login": "generated",
            "node_id": "generated",
            "html_url": "https:\\/\\/example.com\\/",
            "name": "generated",
            "avatar_url": "generated"
        },
        "url": "generated"
    }
}';

    /**
     * id: Unique identifier of the repository.
     * publicRepo: Whether an accepted assignment creates a public repository.
     * title: Assignment title.
     * type: Whether it's a group assignment or individual assignment.
     * inviteLink: The link that a student can use to accept the assignment.
     * invitationsEnabled: Whether the invitation link is enabled. Visiting an enabled invitation link will accept the assignment.
     * slug: Sluggified name of the assignment.
     * studentsAreRepoAdmins: Whether students are admins on created repository when a student accepts the assignment.
     * feedbackPullRequestsEnabled: Whether feedback pull request will be created when a student accepts the assignment.
     * maxTeams: The maximum allowable teams for the assignment.
     * maxMembers: The maximum allowable members per team.
     * editor: The selected editor for the assignment.
     * accepted: The number of students that have accepted the assignment.
     * submitted: The number of students that have submitted the assignment.
     * passing: The number of students that have passed the assignment.
     * language: The programming language used in the assignment.
     * deadline: The time at which the assignment is due.
     * starterCodeRepository: A GitHub repository view for Classroom
     * classroom: A GitHub Classroom classroom
     */
    public function __construct(public int $id, #[MapFrom('public_repo')]
    public bool $publicRepo, public string $title, public string $type, #[MapFrom('invite_link')]
    public string $inviteLink, #[MapFrom('invitations_enabled')]
    public bool $invitationsEnabled, public string $slug, #[MapFrom('students_are_repo_admins')]
    public bool $studentsAreRepoAdmins, #[MapFrom('feedback_pull_requests_enabled')]
    public bool $feedbackPullRequestsEnabled, #[MapFrom('max_teams')]
    public int|null $maxTeams, #[MapFrom('max_members')]
    public int|null $maxMembers, public string $editor, public int $accepted, public int $submitted, public int $passing, public string $language, public string|null $deadline, #[MapFrom('starter_code_repository')]
    public SimpleClassroomRepository $starterCodeRepository, public Classroom $classroom,)
    {
    }
}
