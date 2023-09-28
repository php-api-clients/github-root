<?php

use Symfony\Component\Yaml\Yaml;
use WyriHaximus\SubSplitTools\Files;

require dirname(__DIR__) . '/vendor/autoload.php';

const CLIENTS_PATH =  'clients/';
const CLIENTS_ROOT =  __DIR__ . '/../' . CLIENTS_PATH;
const SPECS_RELATIVE = 'etc/specs/';
const SPECS_ROOT =  __DIR__ . '/../' . SPECS_RELATIVE;
const SKELLETON_ROOT = __DIR__ . '/../skelleton/';
const SUBSPLIT_CONFIG_PATH = __DIR__ . '/../etc/config.subsplit-publish.json';
const RENOVATE_CONFIG_PATH = __DIR__ . '/../.github/renovate.json';
const GHES_PREFIX = 'descriptions-next/ghes-';
const WORKFLOW_PATH = __DIR__ . '/../.github/workflows/';
const WORKFLOW_SKELETON = __DIR__ . '/../etc/workflow-skeleton/';
const RENOVATE_COMPOSER_CONFIG_PREFIX = 'composer/';

$PHP_PACKAGE_RENOVATE_EXTENDS = [...(static function (): iterable {
    foreach (json_decode(
        file_get_contents(
         'https://api.github.com/repos/wyrihaximus/renovate-config/git/trees/main?recursive=1',
         false,
         stream_context_create([
             'http' => [
                 'method' => 'GET',
                 'header' => implode(
                     PHP_EOL,
                     [
                         'User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad'
                     ],
                 ),
             ],
         ])
        ),
        true,
    )['tree'] as $node) {
        $file = $node['path'];
        if (substr($file, 0, strlen(RENOVATE_COMPOSER_CONFIG_PREFIX)) !== RENOVATE_COMPOSER_CONFIG_PREFIX) {
            continue;
        }

        if (substr($file, -5) !== '.json') {
            continue;
        }

        if (substr($file, strlen(RENOVATE_COMPOSER_CONFIG_PREFIX), -5) === 'bump') {
            continue;
        }

        yield "github>wyrihaximus/renovate-config//composer/" . substr($file, strlen(RENOVATE_COMPOSER_CONFIG_PREFIX), -5);
    }
})()];

/** @var array<array{specUrl: string, fullName: string, namespace: string, packageName: string}> $clients */
$clients = [];

foreach (json_decode(
    file_get_contents(
        'https://api.github.com/repos/github/rest-api-description/git/trees/main?recursive=1',
        false,
        stream_context_create([
            'http' => [
                'method' => 'GET',
                'header' => implode(
                    PHP_EOL,
                    [
                        'User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad'
                    ],
                ),
            ],
        ])
    ),
    true,
)['tree'] as $node) {
    $file = $node['path'];
    if (substr($file, 0, strlen(GHES_PREFIX)) !== GHES_PREFIX) {
        continue;
    }

    if (substr($file, -5) !== '.yaml') {
        continue;
    }

    $version = substr($file, strlen(GHES_PREFIX), strpos($file, '/', strlen(GHES_PREFIX)) - strlen(GHES_PREFIX));

    if ($file !== GHES_PREFIX . $version . '/ghes-' . $version . '.yaml') {
        continue;
    }

    $clients[] = [
        'specUrl' => 'https://raw.githubusercontent.com/github/rest-api-description/main/descriptions-next/ghes-' . $version . '/ghes-' . $version . '.yaml',
        'fullName' => 'GitHub Enterprise (v' . $version . ')',
        'namespace' => 'GitHubEnterprise',
        'path' => 'GitHubEnterprise-' . $version,
        'packageName' => 'github-enterprise',
        'branch' => 'v0.1.' . $version . '.x',
    ];
}

$clients[] = [
    'specUrl' => 'https://raw.githubusercontent.com/github/rest-api-description/main/descriptions-next/api.github.com/api.github.com.yaml',
    'fullName' => 'GitHub',
    'namespace' => 'GitHub',
    'path' => 'GitHub',
    'packageName' => 'github',
    'branch' => 'v0.2.x',
];
$clients[] = [
    'specUrl' => 'https://raw.githubusercontent.com/github/rest-api-description/main/descriptions-next/ghec/ghec.yaml',
    'fullName' => 'GitHub Enterprise Cloud',
    'namespace' => 'GitHubEnterpriseCloud',
    'path' => 'GitHubEnterpriseCloud',
    'packageName' => 'github-enterprise-cloud',
    'branch' => 'v0.1.x',
];
$clients[] = [
    'specUrl' => 'https://raw.githubusercontent.com/github/rest-api-description/main/descriptions-next/github.ae/github.ae.yaml',
    'fullName' => 'GitHub AE',
    'namespace' => 'GitHubAE',
    'path' => 'GitHubAE',
    'packageName' => 'github-ae',
    'branch' => 'v0.1.x',
];

if (!file_exists(SPECS_ROOT)) {
    mkdir(SPECS_ROOT);
}

$subSplitConfig = [];
$renovatePackageRules = [];

// The root package
foreach ($PHP_PACKAGE_RENOVATE_EXTENDS as $extends) {
    $renovatePackageRules[] = [
        'matchManagers' => ['composer'],
        'rangeStrategy' => 'in-range-only',
        'matchFileNames' => ['composer.json'],
        'branchPrefix' => 'renovate/root/php/',
        'commitMessagePrefix' => '[🪵]',
        'labels' => [
            '🪵',
        ],
        'extends' => [$extends],
    ];
}
// The Skelleton
foreach ($PHP_PACKAGE_RENOVATE_EXTENDS as $extends) {
    $renovatePackageRules[] = [
        'matchManagers' => ['composer'],
        'rangeStrategy' => 'in-range-only',
        'matchFileNames' => ['skelleton/composer.json'],
        'branchPrefix' => 'renovate/skelleton/php/',
        'commitMessagePrefix' => '[☠️]',
        'labels' => [
            '☠️',
        ],
        'extends' => [$extends],
    ];
}

$renovatePackageRules[] = [
    'matchManagers' => ['github-actions'],
    'matchFileNames' => [
        'etc/workflow-skeleton/**',
    ],
    'branchPrefix' => 'renovate/skelleton/github-actions/',
    'commitMessagePrefix' => '[☠️]',
    'labels' => [
        '☠️',
    ],
];

$renovatePackageRules[] = [
    'matchManagers' => ['github-actions'],
    'matchFileNames' => [
        '.github/workflows/automerge.yml',
        '.github/workflows/setup-clients.yaml',
        '.github/workflows/subsplit.yaml',
    ],
    'branchPrefix' => 'renovate/root/github-actions/',
    'commitMessagePrefix' => '[🪵]',
    'labels' => [
        '🪵',
    ],
];

$firstClient = true;
foreach ($clients as $hour => $client) {
    $client['hour'] = $hour + 3;
    $client['specPath'] = SPECS_RELATIVE . $client['path'] . '/current.spec.yaml';
    $subSplitConfig[$client['fullName']] = [
        'name' => $client['packageName'],
        'directory' => CLIENTS_PATH . $client['path'],
        'target' => 'git@github.com:php-api-clients/' . $client['packageName'] . '.git',
        'target-branch' => $client['branch'],
    ];

    foreach ($PHP_PACKAGE_RENOVATE_EXTENDS as $extends) {
        $renovatePackageRules[] = [
            'matchFileNames' => [CLIENTS_PATH . $client['path'] . '/composer.json'],
            'branchPrefix' => 'renovate/' . $client['path'] . '/php/',
            'commitMessagePrefix' => '[' . $client['path'] . ']',
            'labels' => [
                $client['path'],
            ],
            'extends' => [$extends],
        ];
    }

    $renovatePackageRules[] = [
        'matchManagers' => ['github-actions'],
        'matchFileNames' => [
            '.github/workflows/**' . $client['path'] . '.yaml',
        ],
        'branchPrefix' => 'renovate/' . $client['path'] . '/github-actions/',
        'commitMessagePrefix' => '[' . $client['path'] . ']',
        'labels' => [
            $client['path'],
        ],
        'enabled' => $firstClient,
    ];

    Files::setUp(
        SKELLETON_ROOT,
        CLIENTS_ROOT . $client['path'],
        $client,
    );

    if (!file_exists(SPECS_ROOT . $client['path'])) {
        mkdir(SPECS_ROOT . $client['path']);
    }

    if (!file_exists(SPECS_ROOT . $client['path'] . '/current.spec.yaml')) {
        \Safe\file_put_contents(
            SPECS_ROOT . $client['path'] . '/current.spec.yaml',
            \Safe\file_get_contents(
                $client['specUrl'],
            ),
        );
    }

    Files::setUp(
        WORKFLOW_SKELETON,
        WORKFLOW_PATH,
        $client,
    );
    $firstClient = false;
}

file_put_contents(
    SUBSPLIT_CONFIG_PATH,
    json_encode(
        [
            'sub-splits' => array_values($subSplitConfig),
        ],
        JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES,
    ) . PHP_EOL,
);

file_put_contents(
    RENOVATE_CONFIG_PATH,
    json_encode(
        [
            '$schema' => 'https://docs.renovatebot.com/renovate-schema.json',
            'packageRules' => $renovatePackageRules,
            "github-actions" => [
                "fileMatch" => [
                    "^(workflow-templates|etc/workflow-skeleton|\\.github/workflows)/[^/]+\\.ya?ml$",
                    "(^|/)action\\.ya?ml$"
                ],
            ],
            'extends' => [
                "github>wyrihaximus/renovate-config//internal/base",
                ":prHourlyLimitNone",
                ":prConcurrentLimitNone"
            ],
        ],
        JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES,
    ) . PHP_EOL,
);
