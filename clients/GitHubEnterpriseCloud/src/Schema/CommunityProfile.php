<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class CommunityProfile
{
    public const SCHEMA_JSON         = '{
    "title": "Community Profile",
    "required": [
        "health_percentage",
        "description",
        "documentation",
        "files",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "health_percentage": {
            "type": "integer",
            "examples": [
                100
            ]
        },
        "description": {
            "type": [
                "string",
                "null"
            ],
            "examples": [
                "My first repository on GitHub!"
            ]
        },
        "documentation": {
            "type": [
                "string",
                "null"
            ],
            "examples": [
                "example.com"
            ]
        },
        "files": {
            "required": [
                "code_of_conduct",
                "code_of_conduct_file",
                "license",
                "contributing",
                "readme",
                "issue_template",
                "pull_request_template"
            ],
            "type": "object",
            "properties": {
                "code_of_conduct": {
                    "anyOf": [
                        {
                            "type": "null"
                        },
                        {
                            "title": "Code Of Conduct Simple",
                            "required": [
                                "url",
                                "key",
                                "name",
                                "html_url"
                            ],
                            "type": "object",
                            "properties": {
                                "url": {
                                    "type": "string",
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/api.github.com\\/repos\\/github\\/docs\\/community\\/code_of_conduct"
                                    ]
                                },
                                "key": {
                                    "type": "string",
                                    "examples": [
                                        "citizen_code_of_conduct"
                                    ]
                                },
                                "name": {
                                    "type": "string",
                                    "examples": [
                                        "Citizen Code of Conduct"
                                    ]
                                },
                                "html_url": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/github.com\\/github\\/docs\\/blob\\/main\\/CODE_OF_CONDUCT.md"
                                    ]
                                }
                            },
                            "description": "Code of Conduct Simple"
                        }
                    ]
                },
                "code_of_conduct_file": {
                    "anyOf": [
                        {
                            "type": "null"
                        },
                        {
                            "title": "Community Health File",
                            "required": [
                                "url",
                                "html_url"
                            ],
                            "type": "object",
                            "properties": {
                                "url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                }
                            }
                        }
                    ]
                },
                "license": {
                    "anyOf": [
                        {
                            "type": "null"
                        },
                        {
                            "title": "License Simple",
                            "required": [
                                "key",
                                "name",
                                "url",
                                "spdx_id",
                                "node_id"
                            ],
                            "type": "object",
                            "properties": {
                                "key": {
                                    "type": "string",
                                    "examples": [
                                        "mit"
                                    ]
                                },
                                "name": {
                                    "type": "string",
                                    "examples": [
                                        "MIT License"
                                    ]
                                },
                                "url": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/api.github.com\\/licenses\\/mit"
                                    ]
                                },
                                "spdx_id": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "examples": [
                                        "MIT"
                                    ]
                                },
                                "node_id": {
                                    "type": "string",
                                    "examples": [
                                        "MDc6TGljZW5zZW1pdA=="
                                    ]
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                }
                            },
                            "description": "License Simple"
                        }
                    ]
                },
                "contributing": {
                    "anyOf": [
                        {
                            "type": "null"
                        },
                        {
                            "title": "Community Health File",
                            "required": [
                                "url",
                                "html_url"
                            ],
                            "type": "object",
                            "properties": {
                                "url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                }
                            }
                        }
                    ]
                },
                "readme": {
                    "anyOf": [
                        {
                            "type": "null"
                        },
                        {
                            "title": "Community Health File",
                            "required": [
                                "url",
                                "html_url"
                            ],
                            "type": "object",
                            "properties": {
                                "url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                }
                            }
                        }
                    ]
                },
                "issue_template": {
                    "anyOf": [
                        {
                            "type": "null"
                        },
                        {
                            "title": "Community Health File",
                            "required": [
                                "url",
                                "html_url"
                            ],
                            "type": "object",
                            "properties": {
                                "url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                }
                            }
                        }
                    ]
                },
                "pull_request_template": {
                    "anyOf": [
                        {
                            "type": "null"
                        },
                        {
                            "title": "Community Health File",
                            "required": [
                                "url",
                                "html_url"
                            ],
                            "type": "object",
                            "properties": {
                                "url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                }
                            }
                        }
                    ]
                }
            }
        },
        "updated_at": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time",
            "examples": [
                "2017-02-28T19:09:29Z"
            ]
        },
        "content_reports_enabled": {
            "type": "boolean",
            "examples": [
                true
            ]
        }
    },
    "description": "Community Profile"
}';
    public const SCHEMA_TITLE        = 'Community Profile';
    public const SCHEMA_DESCRIPTION  = 'Community Profile';
    public const SCHEMA_EXAMPLE_DATA = '{
    "health_percentage": 100,
    "description": "My first repository on GitHub!",
    "documentation": "example.com",
    "files": {
        "code_of_conduct": {
            "url": "https:\\/\\/api.github.com\\/repos\\/github\\/docs\\/community\\/code_of_conduct",
            "key": "citizen_code_of_conduct",
            "name": "Citizen Code of Conduct",
            "html_url": "https:\\/\\/github.com\\/github\\/docs\\/blob\\/main\\/CODE_OF_CONDUCT.md"
        },
        "code_of_conduct_file": {
            "url": "https:\\/\\/example.com\\/",
            "html_url": "https:\\/\\/example.com\\/"
        },
        "license": {
            "key": "mit",
            "name": "MIT License",
            "url": "https:\\/\\/api.github.com\\/licenses\\/mit",
            "spdx_id": "MIT",
            "node_id": "MDc6TGljZW5zZW1pdA==",
            "html_url": "https:\\/\\/example.com\\/"
        },
        "contributing": {
            "url": "https:\\/\\/example.com\\/",
            "html_url": "https:\\/\\/example.com\\/"
        },
        "readme": {
            "url": "https:\\/\\/example.com\\/",
            "html_url": "https:\\/\\/example.com\\/"
        },
        "issue_template": {
            "url": "https:\\/\\/example.com\\/",
            "html_url": "https:\\/\\/example.com\\/"
        },
        "pull_request_template": {
            "url": "https:\\/\\/example.com\\/",
            "html_url": "https:\\/\\/example.com\\/"
        }
    },
    "updated_at": "2017-02-28T19:09:29Z",
    "content_reports_enabled": true
}';

    public function __construct(#[MapFrom('health_percentage')]
    public int $healthPercentage, public string|null $description, public string|null $documentation, public Schema\CommunityProfile\Files $files, #[MapFrom('updated_at')]
    public string|null $updatedAt, #[MapFrom('content_reports_enabled')]
    public bool|null $contentReportsEnabled,)
    {
    }
}
