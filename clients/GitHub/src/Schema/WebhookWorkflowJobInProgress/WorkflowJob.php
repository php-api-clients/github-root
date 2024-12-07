<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class WorkflowJob implements \ApiClients\Client\GitHub\Contract\WebhookWorkflowJobInProgress\WorkflowJob\WorkflowJob, \ApiClients\Client\GitHub\Contract\WebhookWorkflowJobInProgress\WorkflowJob
{
    public const SCHEMA_JSON         = '{
    "allOf": [
        {
            "title": "Workflow Job",
            "required": [
                "id",
                "run_id",
                "run_url",
                "run_attempt",
                "node_id",
                "head_sha",
                "url",
                "html_url",
                "status",
                "conclusion",
                "started_at",
                "completed_at",
                "name",
                "steps",
                "check_run_url",
                "labels",
                "runner_id",
                "runner_name",
                "runner_group_id",
                "runner_group_name",
                "workflow_name",
                "head_branch",
                "created_at"
            ],
            "type": "object",
            "properties": {
                "check_run_url": {
                    "type": "string",
                    "format": "uri"
                },
                "completed_at": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "conclusion": {
                    "enum": [
                        "success",
                        "failure",
                        null,
                        "cancelled",
                        "neutral"
                    ],
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "created_at": {
                    "type": "string",
                    "description": "The time that the job created."
                },
                "head_sha": {
                    "type": "string"
                },
                "html_url": {
                    "type": "string",
                    "format": "uri"
                },
                "id": {
                    "type": "integer"
                },
                "labels": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "Custom labels for the job. Specified by the [`\\"runs-on\\"` attribute](https:\\/\\/docs.github.com\\/actions\\/reference\\/workflow-syntax-for-github-actions#jobsjob_idruns-on) in the workflow YAML."
                },
                "name": {
                    "type": "string"
                },
                "node_id": {
                    "type": "string"
                },
                "run_attempt": {
                    "type": "integer"
                },
                "run_id": {
                    "type": "number"
                },
                "run_url": {
                    "type": "string",
                    "format": "uri"
                },
                "runner_group_id": {
                    "type": [
                        "integer",
                        "null"
                    ],
                    "description": "The ID of the runner group that is running this job. This will be `null` as long as `workflow_job[status]` is `queued`."
                },
                "runner_group_name": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The name of the runner group that is running this job. This will be `null` as long as `workflow_job[status]` is `queued`."
                },
                "runner_id": {
                    "type": [
                        "integer",
                        "null"
                    ],
                    "description": "The ID of the runner that is running this job. This will be `null` as long as `workflow_job[status]` is `queued`."
                },
                "runner_name": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The name of the runner that is running this job. This will be `null` as long as `workflow_job[status]` is `queued`."
                },
                "started_at": {
                    "type": "string"
                },
                "status": {
                    "enum": [
                        "queued",
                        "in_progress",
                        "completed"
                    ],
                    "type": "string",
                    "description": "The current status of the job. Can be `queued`, `in_progress`, or `completed`."
                },
                "head_branch": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The name of the current branch."
                },
                "workflow_name": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The name of the workflow."
                },
                "steps": {
                    "type": "array",
                    "items": {
                        "title": "Workflow Step",
                        "required": [
                            "name",
                            "status",
                            "conclusion",
                            "number",
                            "started_at",
                            "completed_at"
                        ],
                        "type": "object",
                        "properties": {
                            "completed_at": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "conclusion": {
                                "enum": [
                                    "failure",
                                    "skipped",
                                    "success",
                                    null,
                                    "cancelled"
                                ],
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "name": {
                                "type": "string"
                            },
                            "number": {
                                "type": "integer"
                            },
                            "started_at": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "status": {
                                "enum": [
                                    "in_progress",
                                    "completed",
                                    "queued",
                                    "pending"
                                ],
                                "type": "string"
                            }
                        }
                    }
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                }
            },
            "description": "The workflow job. Many `workflow_job` keys, such as `head_sha`, `conclusion`, and `started_at` are the same as those in a [`check_run`](#check_run) object."
        },
        {
            "required": [
                "status",
                "steps"
            ],
            "type": "object",
            "properties": {
                "check_run_url": {
                    "type": "string"
                },
                "completed_at": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "conclusion": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "created_at": {
                    "type": "string",
                    "description": "The time that the job created."
                },
                "head_sha": {
                    "type": "string"
                },
                "html_url": {
                    "type": "string"
                },
                "id": {
                    "type": "integer"
                },
                "labels": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    }
                },
                "name": {
                    "type": "string"
                },
                "node_id": {
                    "type": "string"
                },
                "run_attempt": {
                    "type": "integer"
                },
                "run_id": {
                    "type": "integer"
                },
                "run_url": {
                    "type": "string"
                },
                "runner_group_id": {
                    "type": [
                        "number",
                        "null"
                    ]
                },
                "runner_group_name": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "runner_id": {
                    "type": [
                        "number",
                        "null"
                    ]
                },
                "runner_name": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "started_at": {
                    "type": "string"
                },
                "status": {
                    "enum": [
                        "in_progress",
                        "completed",
                        "queued"
                    ],
                    "type": "string"
                },
                "head_branch": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The name of the current branch."
                },
                "workflow_name": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The name of the workflow."
                },
                "steps": {
                    "type": "array",
                    "items": {
                        "title": "Workflow Step",
                        "required": [
                            "name",
                            "status",
                            "conclusion",
                            "number",
                            "started_at",
                            "completed_at"
                        ],
                        "type": "object",
                        "properties": {
                            "completed_at": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "conclusion": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "name": {
                                "type": "string"
                            },
                            "number": {
                                "type": "integer"
                            },
                            "started_at": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "status": {
                                "enum": [
                                    "in_progress",
                                    "completed",
                                    "pending",
                                    "queued"
                                ],
                                "type": "string"
                            }
                        }
                    }
                },
                "url": {
                    "type": "string"
                }
            }
        }
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "check_run_url": "generated",
    "completed_at": "generated",
    "conclusion": "generated",
    "created_at": "generated",
    "head_sha": "generated",
    "html_url": "generated",
    "id": 2,
    "labels": [
        "generated",
        "generated"
    ],
    "name": "generated",
    "node_id": "generated",
    "run_attempt": 11,
    "run_id": 6,
    "run_url": "generated",
    "runner_group_id": 15,
    "runner_group_name": "generated",
    "runner_id": 9,
    "runner_name": "generated",
    "started_at": "generated",
    "status": "in_progress",
    "head_branch": "generated",
    "workflow_name": "generated",
    "steps": [
        {
            "completed_at": "generated",
            "conclusion": "generated",
            "name": "generated",
            "number": 6,
            "started_at": "generated",
            "status": "in_progress"
        },
        {
            "completed_at": "generated",
            "conclusion": "generated",
            "name": "generated",
            "number": 6,
            "started_at": "generated",
            "status": "in_progress"
        }
    ],
    "url": "generated"
}';

    /**
     * createdAt: The time that the job created.
     * headBranch: The name of the current branch.
     * workflowName: The name of the workflow.
     */
    public function __construct(#[MapFrom('check_run_url')]
    public string|null $checkRunUrl, #[MapFrom('completed_at')]
    public string|null $completedAt, public string|null $conclusion, #[MapFrom('created_at')]
    public string|null $createdAt, #[MapFrom('head_sha')]
    public string|null $headSha, #[MapFrom('html_url')]
    public string|null $htmlUrl, public int|null $id, public array|null $labels, public string|null $name, #[MapFrom('node_id')]
    public string|null $nodeId, #[MapFrom('run_attempt')]
    public int|null $runAttempt, #[MapFrom('run_id')]
    public int|null $runId, #[MapFrom('run_url')]
    public string|null $runUrl, #[MapFrom('runner_group_id')]
    public int|float|null $runnerGroupId, #[MapFrom('runner_group_name')]
    public string|null $runnerGroupName, #[MapFrom('runner_id')]
    public int|float|null $runnerId, #[MapFrom('runner_name')]
    public string|null $runnerName, #[MapFrom('started_at')]
    public string|null $startedAt, public string $status, #[MapFrom('head_branch')]
    public string|null $headBranch, #[MapFrom('workflow_name')]
    public string|null $workflowName, public array $steps, public string|null $url,)
    {
    }
}
