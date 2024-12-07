<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\CommunityProfile;

final readonly class Files implements \ApiClients\Client\GitHub\Contract\CommunityProfile\Files
{
    const SCHEMA_JSON = '{
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
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "code_of_conduct": {
        "url": "https:\\/\\/example.com\\/",
        "key": "generated",
        "name": "generated",
        "html_url": "https:\\/\\/example.com\\/"
    },
    "code_of_conduct_file": {
        "url": "https:\\/\\/example.com\\/",
        "html_url": "https:\\/\\/example.com\\/"
    },
    "license": {
        "key": "generated",
        "name": "generated",
        "url": "https:\\/\\/example.com\\/",
        "spdx_id": "generated",
        "node_id": "generated",
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
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('code_of_conduct')] public ?\ApiClients\Client\GitHub\Schema\CodeOfConductSimple $codeOfConduct, #[\EventSauce\ObjectHydrator\MapFrom('code_of_conduct_file')] public ?\ApiClients\Client\GitHub\Schema\CommunityHealthFile $codeOfConductFile, public ?\ApiClients\Client\GitHub\Schema\LicenseSimple $license, public ?\ApiClients\Client\GitHub\Schema\CommunityHealthFile $contributing, public ?\ApiClients\Client\GitHub\Schema\CommunityHealthFile $readme, #[\EventSauce\ObjectHydrator\MapFrom('issue_template')] public ?\ApiClients\Client\GitHub\Schema\CommunityHealthFile $issueTemplate, #[\EventSauce\ObjectHydrator\MapFrom('pull_request_template')] public ?\ApiClients\Client\GitHub\Schema\CommunityHealthFile $pullRequestTemplate)
    {
    }
}
