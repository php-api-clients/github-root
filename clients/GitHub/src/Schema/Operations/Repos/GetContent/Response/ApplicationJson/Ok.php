<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Repos\GetContent\Response\ApplicationJson;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "oneOf": [
        {
            "title": "Content Directory",
            "type": "array",
            "items": {
                "required": [
                    "_links",
                    "git_url",
                    "html_url",
                    "download_url",
                    "name",
                    "path",
                    "sha",
                    "size",
                    "type",
                    "url"
                ],
                "type": "object",
                "properties": {
                    "type": {
                        "enum": [
                            "dir",
                            "file",
                            "submodule",
                            "symlink"
                        ],
                        "type": "string"
                    },
                    "size": {
                        "type": "integer"
                    },
                    "name": {
                        "type": "string"
                    },
                    "path": {
                        "type": "string"
                    },
                    "content": {
                        "type": "string"
                    },
                    "sha": {
                        "type": "string"
                    },
                    "url": {
                        "type": "string",
                        "format": "uri"
                    },
                    "git_url": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "format": "uri"
                    },
                    "html_url": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "format": "uri"
                    },
                    "download_url": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "format": "uri"
                    },
                    "_links": {
                        "required": [
                            "git",
                            "html",
                            "self"
                        ],
                        "type": "object",
                        "properties": {
                            "git": {
                                "type": [
                                    "string",
                                    "null"
                                ],
                                "format": "uri"
                            },
                            "html": {
                                "type": [
                                    "string",
                                    "null"
                                ],
                                "format": "uri"
                            },
                            "self": {
                                "type": "string",
                                "format": "uri"
                            }
                        }
                    }
                }
            },
            "description": "A list of directory items"
        },
        {
            "title": "Content File",
            "required": [
                "_links",
                "git_url",
                "html_url",
                "download_url",
                "name",
                "path",
                "sha",
                "size",
                "type",
                "url",
                "content",
                "encoding"
            ],
            "type": "object",
            "properties": {
                "type": {
                    "enum": [
                        "file"
                    ],
                    "type": "string"
                },
                "encoding": {
                    "type": "string"
                },
                "size": {
                    "type": "integer"
                },
                "name": {
                    "type": "string"
                },
                "path": {
                    "type": "string"
                },
                "content": {
                    "type": "string"
                },
                "sha": {
                    "type": "string"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                },
                "git_url": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "uri"
                },
                "html_url": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "uri"
                },
                "download_url": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "uri"
                },
                "_links": {
                    "required": [
                        "git",
                        "html",
                        "self"
                    ],
                    "type": "object",
                    "properties": {
                        "git": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "uri"
                        },
                        "html": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "uri"
                        },
                        "self": {
                            "type": "string",
                            "format": "uri"
                        }
                    }
                },
                "target": {
                    "type": "string",
                    "examples": [
                        "\\"actual\\/actual.md\\""
                    ]
                },
                "submodule_git_url": {
                    "type": "string",
                    "examples": [
                        "\\"git:\\/\\/example.com\\/defunkt\\/dotjs.git\\""
                    ]
                }
            },
            "description": "Content File"
        },
        {
            "title": "Symlink Content",
            "required": [
                "_links",
                "git_url",
                "html_url",
                "download_url",
                "name",
                "path",
                "sha",
                "size",
                "type",
                "url",
                "target"
            ],
            "type": "object",
            "properties": {
                "type": {
                    "enum": [
                        "symlink"
                    ],
                    "type": "string"
                },
                "target": {
                    "type": "string"
                },
                "size": {
                    "type": "integer"
                },
                "name": {
                    "type": "string"
                },
                "path": {
                    "type": "string"
                },
                "sha": {
                    "type": "string"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                },
                "git_url": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "uri"
                },
                "html_url": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "uri"
                },
                "download_url": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "uri"
                },
                "_links": {
                    "required": [
                        "git",
                        "html",
                        "self"
                    ],
                    "type": "object",
                    "properties": {
                        "git": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "uri"
                        },
                        "html": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "uri"
                        },
                        "self": {
                            "type": "string",
                            "format": "uri"
                        }
                    }
                }
            },
            "description": "An object describing a symlink"
        },
        {
            "title": "Submodule Content",
            "required": [
                "_links",
                "git_url",
                "html_url",
                "download_url",
                "name",
                "path",
                "sha",
                "size",
                "type",
                "url",
                "submodule_git_url"
            ],
            "type": "object",
            "properties": {
                "type": {
                    "enum": [
                        "submodule"
                    ],
                    "type": "string"
                },
                "submodule_git_url": {
                    "type": "string",
                    "format": "uri"
                },
                "size": {
                    "type": "integer"
                },
                "name": {
                    "type": "string"
                },
                "path": {
                    "type": "string"
                },
                "sha": {
                    "type": "string"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                },
                "git_url": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "uri"
                },
                "html_url": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "uri"
                },
                "download_url": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "uri"
                },
                "_links": {
                    "required": [
                        "git",
                        "html",
                        "self"
                    ],
                    "type": "object",
                    "properties": {
                        "git": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "uri"
                        },
                        "html": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "uri"
                        },
                        "self": {
                            "type": "string",
                            "format": "uri"
                        }
                    }
                }
            },
            "description": "An object describing a submodule"
        }
    ],
    "discriminator": {
        "propertyName": "type",
        "mapping": {
            "array": "#\\/components\\/schemas\\/content-directory",
            "file": "#\\/components\\/schemas\\/content-file",
            "symlink": "#\\/components\\/schemas\\/content-symlink",
            "submodule": "#\\/components\\/schemas\\/content-submodule"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
