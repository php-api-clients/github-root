<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class AdvancedSecurityActiveCommitters
{
    public const SCHEMA_JSON         = '{
    "required": [
        "repositories"
    ],
    "type": "object",
    "properties": {
        "total_advanced_security_committers": {
            "type": "integer",
            "examples": [
                25
            ]
        },
        "total_count": {
            "type": "integer",
            "examples": [
                2
            ]
        },
        "maximum_advanced_security_committers": {
            "type": "integer",
            "description": "The total number of GitHub Advanced Security licences required if all repositories were to enable GitHub Advanced Security",
            "examples": [
                4
            ]
        },
        "purchased_advanced_security_committers": {
            "type": "integer",
            "description": "The total number of GitHub Advanced Security licences purchased",
            "examples": [
                4
            ]
        },
        "repositories": {
            "type": "array",
            "items": {
                "required": [
                    "name",
                    "advanced_security_committers",
                    "advanced_security_committers_breakdown"
                ],
                "type": "object",
                "properties": {
                    "name": {
                        "type": "string",
                        "examples": [
                            "octocat\\/Hello-World"
                        ]
                    },
                    "advanced_security_committers": {
                        "type": "integer",
                        "examples": [
                            25
                        ]
                    },
                    "advanced_security_committers_breakdown": {
                        "type": "array",
                        "items": {
                            "required": [
                                "user_login",
                                "last_pushed_date",
                                "last_pushed_email"
                            ],
                            "type": "object",
                            "properties": {
                                "user_login": {
                                    "type": "string"
                                },
                                "last_pushed_date": {
                                    "type": "string",
                                    "examples": [
                                        "2021-11-03"
                                    ]
                                },
                                "last_pushed_email": {
                                    "type": "string",
                                    "examples": [
                                        "monalisa@github.com"
                                    ]
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_advanced_security_committers": 25,
    "total_count": 2,
    "maximum_advanced_security_committers": 4,
    "purchased_advanced_security_committers": 4,
    "repositories": [
        {
            "name": "octocat\\/Hello-World",
            "advanced_security_committers": 25,
            "advanced_security_committers_breakdown": [
                {
                    "user_login": "generated",
                    "last_pushed_date": "2021-11-03",
                    "last_pushed_email": "monalisa@github.com"
                },
                {
                    "user_login": "generated",
                    "last_pushed_date": "2021-11-03",
                    "last_pushed_email": "monalisa@github.com"
                }
            ]
        },
        {
            "name": "octocat\\/Hello-World",
            "advanced_security_committers": 25,
            "advanced_security_committers_breakdown": [
                {
                    "user_login": "generated",
                    "last_pushed_date": "2021-11-03",
                    "last_pushed_email": "monalisa@github.com"
                },
                {
                    "user_login": "generated",
                    "last_pushed_date": "2021-11-03",
                    "last_pushed_email": "monalisa@github.com"
                }
            ]
        }
    ]
}';

    /**
     * maximumAdvancedSecurityCommitters: The total number of GitHub Advanced Security licences required if all repositories were to enable GitHub Advanced Security
     * purchasedAdvancedSecurityCommitters: The total number of GitHub Advanced Security licences purchased
     */
    public function __construct(#[MapFrom('total_advanced_security_committers')]
    public int|null $totalAdvancedSecurityCommitters, #[MapFrom('total_count')]
    public int|null $totalCount, #[MapFrom('maximum_advanced_security_committers')]
    public int|null $maximumAdvancedSecurityCommitters, #[MapFrom('purchased_advanced_security_committers')]
    public int|null $purchasedAdvancedSecurityCommitters, public array $repositories,)
    {
    }
}
